$(function () {

    const root = 'https://portfolio.app';

    $('.thumbnail-nav .item-link').on('click', function(event) {
      event.preventDefault();
      let request_uri = $(this).attr('href');
      let dataset = $(this).attr('dataset');

      $('.thumbnail-nav .item-link').removeClass('active');
      $(this).addClass('active');

      $.ajax({
        url: root + request_uri,
        method: 'GET'
      }).then(function(data) {
        if(dataset == "project") {
          let project = JSON.parse(data);
          $('.title').html(project.title);
          $('.subtitle').html(project.subtitle);
          $('.starting').html(project.starting_date);
          $('.ending').html(project.ending_date);
          $('.description').html(project.description);
          $('.url').html(project.url);
        }
        else {
          let work = JSON.parse(data);
          $('.company_name').html(work.company_name);
          $('.position').html(work.position);
          $('.location').html(work.location);
          $('.starting').html(work.starting_date);
          $('.ending').html(work.ending_date);
          $('.description').html(work.description);
      }
      });

    });


});
