
jQuery(function( $ ) {
        $(function() { 
            initPriceSlider();
        });
     });

function initPriceSlider() {
    var $document =jQuery(document)
    var selector = '[data-rangeslider]'
    // For ie8 support
    var textContent = 'textContent' in document ? 'textContent' : 'innerText'

    // Pricing algorithm implementation
    function valueOutput(element) {
        var count = element.value
        var prices = [12.99, 11.04, 9.94, 8.94, 9.05, 7.24]
        var limits = [10, 25, 50, 100, 250, 500]
        var discount = 0.15

        var price = 0.0
        for (var i = 0; i < prices.length; i++) {
            if (count > limits[i]) {
                price += limits[i] * prices[i]
                count -= limits[i]
            } else {
                price += count * prices[i]
                break
            }
        }
        var priceOutput =
            document.getElementsByTagName('priceOutput')[0] ||
            document.getElementsByTagName('priceOutput')[0]
        var priceDiscounted =
            document.getElementsByTagName('priceDiscounted')[0] ||
            document.getElementsByTagName('priceDiscounted')[0]
        priceOutput[textContent] = (price / element.value).toFixed(2)
        priceDiscounted[textContent] = ((price / element.value) * (1 - discount)).toFixed(2)
    }

    function updateWorkers(element) {
        var WorkerCount = element.value
        var workerOutput =
            document.getElementsByTagName('workerOutput')[0] ||
            document.getElementsByTagName('workerOutput')[0]
        workerOutput[textContent] = WorkerCount
    }

    $document.on('mouseup', 'input[type="range"], ' + selector, function(e) {
        valueOutput(e.target)
    })

    $document.on('input', 'input[type="range"], ' + selector, function(e) {
        updateWorkers(e.target)
    })

    // Basic rangeslider initialization
    jQuery('input[type="range"]').rangeslider({
        // Deactivate the feature detection
        polyfill: false,
        // Callback function
        onInit: function() {
            valueOutput(this.$element[0])
            updateWorkers(this.$element[0])
        },
        // Callback function
        onSlide: function(position, value) {},
        // Callback function
        onSlideEnd: function(position, value) {
            valueOutput(this.$element[0])
        },
    })
}