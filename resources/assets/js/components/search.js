import Fuse from 'fuse.js'
$(function () {
	const shelve = $('.thumbnail-nav .item-link').map(function() {
      return {
        category : this.getAttribute('category'),
        skill: this.getAttribute('title')
      };

    }).get();
    const suggestion = $('.suggestion');

    const options = {
      shouldSort: true,
      threshold: 0.4,
      location: 0,
      distance: 5,
      maxPatternLength: 32,
      minMatchCharLength: 2,
      keys: [ {
        name: "skill",
        weight: 0.7
      },
      {
        name: "category",
        weight: 0.3
      }]
    };
    const fuse = new Fuse(shelve, options); 


    $('#search').on('keyup change', function() {
      let result = fuse.search($(this).val());
      suggestion.html('');
      for (let item of result) {
        let el = '<li class="suggested-item list-group-item pointer"><a href="#">'+item.skill+'</a></li>'
        suggestion.append(el)
      }

    $('.suggested-item').on('click', function() {
        $('#search').val($(this).text());
        $('.suggestion').html('');
        $('.searchbar form button').click();
      });
    });

    $('.searchbar form').on('submit', function(event) {
      event.preventDefault();
      let searchiItem = $('#search').val();
      let url = "/skills/"+ searchiItem;
      $.ajax({
        url: url,
        type: 'GET',
        success: () => {
                let target = $(".thumbnail-nav .item-link[title='"+searchiItem+"']");
                target.click();
                let posL = $('.thumbnail-container ul')[0].scrollLeft + $('.active').offset().left;
                $('.thumbnail-container ul').scrollLeft(posL);
                $('#search').val("");

        }
       });

    })
});
 