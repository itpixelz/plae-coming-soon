jQuery(document).ready(function() {
  jQuery('.page-loader').fadeOut();
  jQuery('.countdown').countdown({
    // date: 'June 7, 2087 15:03:26',
    date: 'September 18, 2019 12:00:00',
    //TODO: might need formatting and also get it from the data
  });
});

