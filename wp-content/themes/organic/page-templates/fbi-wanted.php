<?php
/**
 * Template Name: FBI Wanted page
 *
 */

$html_criminal = get_transient('fbi_wanted_list');

if( empty( $html_criminal ) ) {
	
}


get_header(); ?>
	<article class="fbi-offices-page">
		<div class="entry-content">

			<div class=" container">
				<div class="row">
					<?php echo get_theme_page_title_block( $title, false, false ); ?>
					<div class="fbi-offices-page__list">
						<select>
							<option selected disabled><?php _e( '-- FBI offices --', 'organic' ); ?></option>
							<option value="seattle"><?php _e( 'Seattle', 'organic' ); ?></option>
							<option value="portland"><?php _e( 'Portland', 'organic' ); ?></option>
							<option value="sacramento"><?php _e( 'Sacramento', 'organic' ); ?></option>
							<option value="sanfrancisco"><?php _e( 'San Francisco', 'organic' ); ?></option>
							<option value="losangeles"><?php _e( 'Los Angeles', 'organic' ); ?></option>
							<option value="sandiego"><?php _e( 'San Diego', 'organic' ); ?></option>
							<option value="lasvegas"><?php _e( 'Las Vegas', 'organic' ); ?></option>
							<option value="saltlakecity"><?php _e( 'Salt Lake City', 'organic' ); ?></option>
							<option value="phoenix"><?php _e( 'Phoenix', 'organic' ); ?></option>
							<option value="denver"><?php _e( 'Denver', 'organic' ); ?></option>
							<option value="albuquerque"><?php _e( 'Albuquerque', 'organic' ); ?></option>
							<option value="elpaso"><?php _e( 'El Paso', 'organic' ); ?></option>
							<option value="sanantonio"><?php _e( 'San Antonio', 'organic' ); ?></option>
							<option value="oklahomacity"><?php _e( 'Oklahoma City', 'organic' ); ?></option>
							<option value="dallas"><?php _e( 'Dallas', 'organic' ); ?></option>
							<option value="houston"><?php _e( 'Houston', 'organic' ); ?></option>
							<option value="omaha"><?php _e( 'Omaha', 'organic' ); ?></option>
							<option value="minneapolis"><?php _e( 'Minneapolis', 'organic' ); ?></option>
							<option value="kansascity"><?php _e( 'Kansas City', 'organic' ); ?></option>
							<option value="littlerock"><?php _e( 'Little Rock', 'organic' ); ?></option>
							<option value="springfield"><?php _e( 'Springfield', 'organic' ); ?></option>
							<option value="stlouis"><?php _e( 'St. Louis', 'organic' ); ?></option>
							<option value="memphis"><?php _e( 'Memphis', 'organic' ); ?></option>
							<option value="jackson"><?php _e( 'Jackson', 'organic' ); ?></option>
							<option value="neworleans"><?php _e( 'New Orleans', 'organic' ); ?></option>
							<option value="mobile"><?php _e( 'Mobile', 'organic' ); ?></option>
							<option value="birmingham"><?php _e( 'Birmingham', 'organic' ); ?></option>
							<option value="milwaukee"><?php _e( 'Milwaukee', 'organic' ); ?></option>
							<option value="chicago"><?php _e( 'Chicago', 'organic' ); ?></option>
							<option value="indianapolis"><?php _e( 'Indianapolis', 'organic' ); ?></option>
							<option value="cincinnati"><?php _e( 'Cincinnati', 'organic' ); ?></option>
							<option value="louisville"><?php _e( 'Louisville', 'organic' ); ?></option>
							<option value="knoxville"><?php _e( 'Knoxville', 'organic' ); ?></option>
							<option value="atlanta"><?php _e( 'Atlanta', 'organic' ); ?></option>
							<option value="charlotte"><?php _e( 'Charlotte', 'organic' ); ?></option>
							<option value="columbia"><?php _e( 'Columbia', 'organic' ); ?></option>
							<option value="jacksonville"><?php _e( 'Jacksonville', 'organic' ); ?></option>
							<option value="tampa"><?php _e( 'Tampa', 'organic' ); ?></option>
							<option value="miami"><?php _e( 'Miami', 'organic' ); ?></option>
							<option value="sanjuan"><?php _e( 'San Juan', 'organic' ); ?></option>
							<option value="anchorage"><?php _e( 'Anchorage', 'organic' ); ?></option>
							<option value="honolulu"><?php _e( 'Honolulu', 'organic' ); ?></option>
							<option value="detroit"><?php _e( 'Detroit', 'organic' ); ?></option>
							<option value="cleveland"><?php _e( 'Cleveland', 'organic' ); ?></option>
							<option value="pittsburgh"><?php _e( 'Pittsburgh', 'organic' ); ?></option>
							<option value="norfolk"><?php _e( 'Norfolk', 'organic' ); ?></option>
							<option value="richmond"><?php _e( 'Richmond', 'organic' ); ?></option>
							<option value="washington"><?php _e( 'Washington', 'organic' ); ?></option>
							<option value="baltimore"><?php _e( 'Baltimore', 'organic' ); ?></option>
							<option value="philadelphia"><?php _e( 'Philadelphia', 'organic' ); ?></option>
							<option value="newyork"><?php _e( 'New York', 'organic' ); ?></option>
							<option value="newark"><?php _e( 'Newark', 'organic' ); ?></option>
							<option value="newhaven"><?php _e( 'New Haven', 'organic' ); ?></option>
							<option value="albany"><?php _e( 'Albany', 'organic' ); ?></option>
							<option value="boston"><?php _e( 'Boston', 'organic' ); ?></option>
						</select>
					</div>
					<div class="fbi-offices-page__criminals-block">
						<div class="fbi-offices-page__criminals-list"></div>
						<div class="fbi-offices-page__error-message"></div>
						<div class="fbi-loader"></div>
					</div>
				</div>
			</div>

		</div>
	</article>
<?php
get_footer(); ?>