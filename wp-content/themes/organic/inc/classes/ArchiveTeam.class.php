<?php
class ArchiveTeam {
	public $html_departments; 
	public $array_with_members_in_departaments; 

	function get_departments() {
		$departments_list = get_terms( array(
			'taxonomy' => 'departments'
		));

		$this->html_departments = '<ul class="org-team-section__departments-list">';
		$active_counter = 1;

		foreach( $departments_list as $department_item ) {
			$departmen_id = $department_item->term_id;
			$departmen_name = $department_item->name;
			$departmen_class = ( $active_counter == 1 ) ? 'active' : null;
			$active_counter++;

			$this->array_with_members_in_departaments[$departmen_id] = array();
			$this->html_departments .= '<li><a class="org-team-section__departments-link ' . $departmen_class . '" href="#" data-department="' . $departmen_id . '">' . $departmen_name . '</a></li>';
		}

		$this->html_departments .= '</ul>';
	}


	function get_team_lists() {
		$all_team = get_posts( array(
			'post_type'        => 'team',
			'post_status'      => 'publish',
			'order'            => 'DESC',
			'orderby'	       => 'name',
			'suppress_filters' => false,
			'numberposts'      => -1
		));

		foreach( $all_team as $team_item ) {
			$member_title = $team_item->post_title;
			$member_id = $team_item->ID;
			$member_position = get_field( 'employee_position', $member_id );
			$member_quote = get_field( 'employee_quote', $member_id );

			$member_avatar = get_the_post_thumbnail_url( $member_id );
			$member_avatar = ( empty( $member_avatar ) ) ? THEME_DIR_URI .'/assets/images/team/no_avatar.png' : $member_avatar;
			$member_avatar_alt = get_post_meta( get_post_thumbnail_id( $member_id ), '_wp_attachment_image_alt', true );

			$member_department_id = get_the_terms( $member_id, 'departments' );
			$member_department_id = ( isset( $member_department_id[0] ) ) ? $member_department_id[0]->term_id : null;

			$this->array_with_members_in_departaments[$member_department_id][] = array(
				'avatar'        => $member_avatar,
				'avatar_alt'    => $member_avatar_alt,
				'name'          => $member_title,
				'position'      => $member_position,
				'quote'			 => $member_quote,
				'department_id' => $member_department_id
			);
		}
	}


	function display_departments_list() {
		$html_departments_list = null;
		$active_counter = 1;

		foreach( $this->array_with_members_in_departaments as $key => $department_member ) {

			$departmen_class = ( $active_counter == 1 ) ? 'active' : null;
			$active_counter++;
			$html_members = null;

			foreach( $department_member as $department_member ) {
				$html_members .= <<<HTML
		<a href="#" class="team-member">
			<div class="team-member__avatar">
				<img src="{$department_member['avatar']}" alt="{$department_member['avatar_alt']}">
			</div>
			<div class="team-member__wrapper">
				<div class="team-member__name">{$department_member['name']}</div>
				<div class="team-member__position">{$department_member['position']}</div>
				<div class="team-member__quote">{$department_member['quote']}</div>
			</div>
		</a>
HTML;
			}

	$html_departments_list .= <<<HTML
		<div class="workers-list {$departmen_class}" data-department="{$key}">
			<div class="workers-list__wrapper">
				{$html_members}
			</div>
		</div>
HTML;

		}
		return $html_departments_list;
	}


	function display() {
		$this->get_departments();
		$this->get_team_lists();
		$html_departments_lists = $this->display_departments_list();

		$block = <<<HTML
<section class="org-team-section">
	<div class="row">
		<div class="org-team-section__departments">
			{$this->html_departments}
		</div>
		<div class="org-team-section__members-lists">
			{$html_departments_lists}
		</div>
	</div>
</section>
HTML;

		return $block;
	}
}
