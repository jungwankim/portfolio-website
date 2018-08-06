

$(function () {

    const root = 'https://jkwan.info';

    $('.thumbnail-nav .item-link').on('click', function(event) {
      event.preventDefault();
      let skill = $(this).attr('title');
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
        else if(dataset == 'work') {
          let work = JSON.parse(data);
          $('.company_name').html(work.company_name);
          $('.position').html(work.position);
          $('.location').html(work.location);
          $('.starting').html(work.starting_date);
          $('.ending').html(work.ending_date);
          $('.description').html(work.description);
        }
        else {
          $('.skill').html('<h1>'+skill+'</h1>');
          $('.projects').html("");
          $('.works').html("");
          let works = data.works;
          let projects = data.projects;
          if (!($.isEmptyObject(works))) {
            $('.works').append("<h3>Realted Works</h3>");
            for (let work in works) {
              let line = "<a href='/works/" + works[work] + "'>" + work + "</a><br/>"
              $('.works').append(line);
            }

          }

          if (!($.isEmptyObject(projects))) {
            $('.projects').append("<h3>Realted Projects</h3>");
            for (let project in projects) {
              let line = "<a href='/projects/" + projects[project] + "'>" + project + "</a><br/>"
              $('.projects').append(line);
            }
          }
        }
      });
    });
});
