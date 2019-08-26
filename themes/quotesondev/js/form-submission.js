(function( $ ) {
    console.log("kayla is here")
    const $quoteForm = $('#quote-submission-form')
    
    $quoteForm.submit(function(e) {
        e.preventDefault()
        console.log('button has been pushed')
        let $quote = $('#the-quote').val()
        console.log($quote)
        let $quoteAuthor = $('#author').val()
        console.log($quoteAuthor)
        let $quoteSource = $('#quote-source').val()
        console.log($quoteSource)
        let $quoteSourceUrl = $('#quote-source-url').val()
        console.log($quoteSourceUrl);

        console.log('aer we getting anywhere?');



        let jsonObj = {
            title: $quoteAuthor,
            content: $('#the-quote').val(),
            _qod_quote_source: $quoteSource,
            _qod_quote_source_url: $quoteSourceUrl,
            status: 'publish',
            type: 'post',
            slug: 'slug'
        }

        console.log('jsonObj', jsonObj)

        let string = JSON.stringify(jsonObj)
        console.log(string)

        

        $.ajax({
            method: 'POST',
            url: new_quote.rest_url + 'wp/v2/posts',
            dataType: 'json',
            data: JSON.stringify(jsonObj),
            beforeSend: function(xhr) {
                xhr.setRequestHeader( 'X-WP-Nonce', new_quote.wpapi_nonce ); 
        }
        })
        .done(function(response) {
            console.log(response)
        })
        .fail(function(response) {
            console.log('of course it didn\'t work')
        })

    })

    
    
 })( jQuery )