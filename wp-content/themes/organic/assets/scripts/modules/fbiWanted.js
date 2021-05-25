$(document).ready(function () {
	if ($('.fbi-offices-page').length > 0) {

		// let ctx = $('#country_chart')[0].getContext('2d');
		// let country_chart;

		$('.fbi-offices-page__list select').change(function () {
			let office_code = $(this).val();

			$('.fbi-loader').show();
			$('.fbi-offices-page__criminals-list').empty();

			$('.fbi-offices-page__error-message').hide();

			$.ajax({
				url: themeVars.ajaxurl,
				dataType: 'json',
				method: 'GET',
				data: {
					action: 'get_fbi_data',
					office_code: office_code,
				},
				success: function (data) {

					if (data.status === 'success') {
						// console.log(data);
						let responseHtml = null;

						// let results = data.results;

						for (let result of data.results) {
							let title = result.title;
							let path = result.path;
							let details = result.details;
							if (details == null) {
								details = 'Details: No data';
							}
							let reward_text = result.reward_text;
							if (reward_text == null) {
								reward_text = 'Reward: No data';
							}
							let image = result.image;
							// let total_pages = result.total_pages;

							responseHtml = `
								<div class="fbi-offices-page__criminal fbi-criminal">
									<a href="${path}" class="fbi-criminal__avatar-wrapper" target="_blank">
										<div class="fbi-criminal__avatar" style="background-image: url(${image})">
										</div>
									</a>

									<div class="fbi-criminal__wrapper">
										<a href="${path}" class="fbi-criminal__link" target="_blank">
											<h2 class="fbi-criminal__name">${title}</h2>
										</a>
										<div class="fbi-criminal__reward">${reward_text}</div>
										<div class="fbi-criminal__description">${details}</div>
									</div>
								</div>
							`
							$('.fbi-offices-page__criminals-list').append(responseHtml);
							$('.fbi-loader').hide();
						}
					} else {
						let error_message = data.error;
						$('.fbi-offices-page__error-message').text(error_message).fadeIn(300);
						$('.fbi-loader').hide();
					}
				},
			});
		});

	}


});