(function( $ ) {
    // Global Variables
    const $quoteZone = $('.the-quote-zone')
    const $authorArea = $('.author-area')
    const $homeQuote = $('.toggle-display')
    const $quoteSubmitMsg = $('.thanks-display')
    const $quoteSubmitErr = $('.error-msg')


   //  Home Page - Get a Quote

    $('.show-more').on('click', function(event) {
       event.preventDefault();
        // Clear the quote and author divs
        $homeQuote.toggle('slow')
        $quoteZone.empty()
        $authorArea.empty()
       
       $.ajax({
          method: 'GET',
          url: dev_quote.rest_url + 'wp/v2/posts?filter[orderby]=rand&per_page=1',
          beforeSend: function(xhr) {
             xhr.setRequestHeader( 'X-WP-Nonce', dev_quote.wpapi_nonce );
          }
       }).done( function(quote) {
          let theQuote = quote[0].content.rendered
          let author = quote[0].title.rendered
          let source = quote[0]['_qod_quote_source']
          let sourceUrl = quote[0]['_qod_quote_source_url']
          
        // Append Quotes and Info to Respective Div
        $quoteZone.append(`<h3 class="quote-text">${theQuote}</h3>`)
        $authorArea.append(`<p class="mobile-author">&mdash; ${author}</p>`)
        if (source && sourceUrl) {
            $authorArea.append(`<p class="quote-source">, <a href="${sourceUrl}">${source}</a></p>`)
        }
        else if (source) {
            $authorArea.append(`<p class="quote-source">, ${source}</p>`)
        }
        // Animate Quote Display
        $homeQuote.toggle('slow')

       });
    });


   //  Submit a Quote
   
    const $quoteForm = $('#quote-submission-form')
    
    $quoteForm.submit(function(e) {
        e.preventDefault()

         let $quote = $('#the-quote').val()
         let $quoteAuthor = $('#author').val()
         let $quoteSource = $('#quote-source').val()
         let $quoteSourceUrl = $('#quote-source-url').val()


         let jsonObj = {
            title: $quoteAuthor,
            content: $quote,
            _qod_quote_source: $quoteSource,
            _qod_quote_source_url: $quoteSourceUrl,
            status: 'pending',
            type: 'post',
            slug: $quoteAuthor
         }


        $.ajax({
            method: 'POST',
            url: dev_quote.rest_url + 'wp/v2/posts',
            contentType: "application/json; charset=utf-8",
            dataType: 'json',
            data: JSON.stringify(jsonObj),
            beforeSend: function(xhr) {
                xhr.setRequestHeader( 'X-WP-Nonce', dev_quote.wpapi_nonce ); 
            }
        })
        .done(function(response) {
            $quoteForm[0].reset()
            $quoteSubmitMsg.fadeIn()

        })
        .fail(function(response) {
            $quoteSubmitErr.fadeIn()
        })

         


    })
        
        




 })( jQuery );