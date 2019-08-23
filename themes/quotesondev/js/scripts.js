(function( $ ) {
    // Global Variables
    const $quoteZone = $('.the-quote-zone')
    const $authorArea = $('.author-area')


    $('.show-more').on('click', function(event) {
       event.preventDefault();
        // clear the quote and author divs
        $quoteZone.empty()
        $authorArea.empty()
       
       $.ajax({
          method: 'get',
          url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&per_page=1',
          beforeSend: function(xhr) {
             xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
          }
       }).done( function(quote) {
          console.log('Success! Here\'s another quote.');
          console.log(quote)
          let theQuote = quote[0].content.rendered
          let author = quote[0].title.rendered
          console.log('author', author)
          let source = quote[0]['_qod_quote_source']
          console.log('source', source)
          let sourceUrl = quote[0]['_qod_quote_source_url']
          console.log('source url', sourceUrl)
          
        // Append Quotes and Meta to Respective Div
        $quoteZone.append(`<h2>${theQuote}</h2>`)
        $authorArea.append(`<p>-${author}</p>`)
        if (source && sourceUrl) {
            $authorArea.append(`<span>, </span><a href="${sourceUrl}"><p class="quote-source">${source}</p></a>`)
        }
        else if (source) {
            $authorArea.append(`<span>, </span><p class="quote-source">${source}</p>`)
        }

       });
    });
 })( jQuery );