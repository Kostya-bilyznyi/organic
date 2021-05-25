<?php
/**
 * Template Name: FBI Wanted page
 *
 */

get_header(); ?>
	<article class="fbi-offices-page">
		<div class="entry-content">

			<div class=" container">
				<div class="row">
					<?php echo get_theme_page_title_block( $title, false, false ); ?>
					<div class="fbi-offices-page__list">
						<select>
							<option>-- FBI offices --</option>
							<option value="seattle">Seattle</option>
							<option value="portland">Portland</option>
							<option value="sacramento">Sacramento</option>
							<option value="sanfrancisco">San Francisco</option>
							<option value="losangeles">Los Angeles</option>
							<option value="sandiego">San Diego</option>
							<option value="lasvegas">Las Vegas</option>
							<option value="saltlakecity">Salt Lake City</option>
							<option value="phoenix">Phoenix</option>
							<option value="denver">Denver</option>
							<option value="albuquerque">Albuquerque</option>
							<option value="elpaso">El Paso</option>
							<option value="sanantonio">San Antonio</option>
							<option value="oklahomacity">Oklahoma City</option>
							<option value="dallas">Dallas</option>
							<option value="houston">Houston</option>
							<option value="omaha">Omaha</option>
							<option value="minneapolis">Minneapolis</option>
							<option value="kansascity">Kansas City</option>
							<option value="littlerock">Little Rock</option>
							<option value="springfield">Springfield</option>
							<option value="stlouis">St. Louis</option>
							<option value="memphis">Memphis</option>
							<option value="jackson">Jackson</option>
							<option value="neworleans">New Orleans</option>
							<option value="mobile">Mobile</option>
							<option value="birmingham">Birmingham</option>
							<option value="milwaukee">Milwaukee</option>
							<option value="chicago">Chicago</option>
							<option value="indianapolis">Indianapolis</option>
							<option value="cincinnati">Cincinnati</option>
							<option value="louisville">Louisville</option>
							<option value="knoxville">Knoxville</option>
							<option value="atlanta">Atlanta</option>
							<option value="charlotte">Charlotte</option>
							<option value="columbia">Columbia</option>
							<option value="jacksonville">Jacksonville</option>
							<option value="tampa">Tampa</option>
							<option value="miami">Miami</option>
							<option value="sanjuan">San Juan</option>
							<option value="anchorage">Anchorage</option>
							<option value="honolulu">Honolulu</option>
							<option value="detroit">Detroit</option>
							<option value="cleveland">Cleveland</option>
							<option value="pittsburgh">Pittsburgh</option>
							<option value="norfolk">Norfolk</option>
							<option value="richmond">Richmond</option>
							<option value="washington">Washington</option>
							<option value="baltimore">Baltimore</option>
							<option value="philadelphia">Philadelphia</option>
							<option value="newyork">New York</option>
							<option value="newark">Newark</option>
							<option value="newhaven">New Haven</option>
							<option value="albany">Albany</option>
							<option value="boston">Boston</option>
						</select>
					</div>
					<div class="fbi-offices-page__criminals-block">
						<div class="fbi-offices-page__criminals-list">
						</div>
						<div class="fbi-offices-page__error-message"></div>
						<div class="fbi-loader"></div>
					</div>
				</div>
			</div>

		</div>
	</article>
<?php
get_footer(); ?>