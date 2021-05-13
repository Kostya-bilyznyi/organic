$(document).ready(function () {

	if ($('.org-team-section').length > 0) {

		$('.org-team-section__departments-link').on('click', function (e) {
			e.preventDefault();

			const link = $(this);

			if (link.hasClass('active')) {
				return false;
			}

			const departmentId = link.attr('data-department');

			$('.org-team-section__departments-link.active').removeClass('active');
			link.addClass('active');
			$('.workers-list.active').removeClass('active');
			$(`.workers-list[data-department=${departmentId}]`).addClass('active');
		});
	}
});