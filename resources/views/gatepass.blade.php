<title>PDF invoice</title>
<!-- Default Shopify Styling -->
<style>
    @media screen,
    print {

        body,
        html {
            font-size: 18px;
            line-height: 2;
            background-color: none;
            background: none
        }

        #body {
            min-height: 0 !important
        }

        * {
            margin: 0;
            padding: 0;
            font-size: 1.5em;
            line-height: normal;
            color: #000;
            font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        }

        .span1,
        .span2,
        .span3,
        .span4,
        .span5,
        .span6,
        .span7,
        .span8,
        .span9,
        .span10,
        .span11,
        .span12,
        .span13,
        .span14,
        .span15,
        .span16,
        .span17,
        .span18,
        .span19,
        .span20,
        .span21,
        .span22,
        .span23,
        .span24 {
            padding: 0 10px
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        li,
        span {
            color: #000
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        ul,
        ol {
            margin: 0 0 1em 0
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: bold
        }

        h1 {
            font-size: 200%
        }

        h2 {
            font-size: 150%
        }

        h3 {
            font-size: 125%
        }

        h4 {
            font-size: 100%
        }

        h5 {
            font-size: 100%
        }

        h6 {
            font-size: 90%;
            font-style: italic
        }

        hr {
            clear: both;
            overflow: hidden;
            margin: 1.5em 0 1.5em 0;
            border: 0;
            border-bottom: 2px solid #e1e1e1;
            height: 0
        }

        a:link,
        a:visited {
            color: #00c;
            font-weight: bold;
            text-decoration: underline
        }

        b,
        strong {
            font-weight: bold
        }

        li {
            margin: 0 0 0 2em;
            list-style: disc
        }

        table,
        td,
        th {
            border-spacing: 0;
            border-collapse: collapse
        }

        td,
        th {
            border-bottom: none
        }

        .table-tabular {
            border: 1px solid #e1e1e1;
            margin: 0 0 0 0;
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse
        }

        .table-tabular th,
        .table-tabular td {
            padding: 0.5em;
            text-align: left
        }

        .table-tabular th {
            border-bottom: 1px solid #e1e1e1
        }

        .table-tabular td {
            border-bottom: 1px solid #e1e1e1;
            text-align: left
        }

        .table-tabular tfoot td {
            border-bottom-width: 0px;
            border-top: 1px solid #e1e1e1;
            padding-top: 1em
        }
    }

</style>
<style type='text/css' id='font-primary-36045'>
    /* latin-ext */
    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh7USSwaPGR_p.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh7USSwiPGQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/lato/v14/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

</style>
</head>

<body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <div class='printer-preview-content'>
        <!-- Winter Breeze -->
        <!-- Common Base Styling -->

        <!-- Black text color -->


        <!-- Grey text color -->


        <script>
            $.ajaxSetup({
                cache: true
            });
            var url = 'https://orderprintertemplates.com/JsBarcode.all.min.js';
            var options = {
                format: 'CODE128',
                width: 1,
                height: 16,
                quite: 1,
                lineColor: '#000000',
                displayValue: false, //Show the text below the barcode (can be true or false)
                fontSize: 11,
                font: 'Lato',
                textAlign: 'left'
            }
            $.getScript(url, function() {
                // Barcode Generator for Order Number
                $('.barcode-64931').each(function() {
                    $(this).JsBarcode('9999', options);
                });
            });
        </script>

        <style type='text/css'>
            /* ### BASE - PAGE SIZING AND MARGIN SETUP NORMALIZATION ACROSS BROWSERS ### */
            @page {
                margin: 12mm !important;
                margin-top: 12mm !important;
                margin-right: 12mm !important;
                margin-bottom: 12mm !important;
                margin-left: 12mm !important;
            }

            @media print {
                .safari {
                    padding-top: 15px;
                    box-sizing: border-box;
                }

                .printer-preview-content .printer-preview-content {
                    padding-left: 15px;
                    padding-right: 15px;
                    box-sizing: border-box;
                }
            }

            @media screen {
                .printer-preview-content {
                    padding: 16px 0;
                    min-height: 800px;
                    /* background-image: url(http://basehold.it/i/16) */
                }

                .printer-preview-content .printer-preview-content {
                    margin-right: auto;
                    margin-left: auto;
                    max-width: 620px;
                }
            }

            @media screen,
            print {

                /* ### BASE - TYPOGRAPHY AND REMOVAL OF STANDARD SHOPIFY STYLING ### */
                .printer-preview-content .t36045 * {
                    color: #333333;
                    font-family: 'Lato';
                    font-size: 12px;
                    font-weight: 400;
                    line-height: 16px;
                    text-rendering: optimizeLegibility;
                    margin: 0 0 0 0;
                    padding: 0 0 0 0;
                    -webkit-print-color-adjust: exact;
                    overflow: visible !important;
                }

                .printer-preview-content .t36045 h1 {
                    font-size: 28px;
                    line-height: 32px;
                }

                .printer-preview-content .t36045 h2 {
                    font-size: 18px;
                    line-height: 32px;
                }

                .printer-preview-content .t36045 h3 {
                    font-size: 14px;
                    line-height: 16px;
                }

                .printer-preview-content .t36045 h1,
                .printer-preview-content .t36045 h2,
                .printer-preview-content .t36045 h3 {
                    margin-bottom: 16px;
                }

                .printer-preview-content .t36045 b,
                .printer-preview-content .t36045 b * {
                    font-weight: bold;
                }

                .printer-preview-content .t36045 .text-right {
                    text-align: right;
                }

                .printer-preview-content .t36045 .text-center {
                    text-align: center;
                }

                .printer-preview-content .t36045 .no-wrap {
                    white-space: nowrap;
                }

                /* ### BASE - GRID AND RE-USABLE LAYOUT COMPONENTS ### */
                .printer-preview-content .t36045 .row {
                    width: 100%;
                    display: block;
                    clear: both;
                }

                .printer-preview-content .t36045 .row:after {
                    content: '';
                    display: table;
                    clear: both;
                }

                .printer-preview-content .t36045 .col-xs-1,
                .printer-preview-content .t36045 .col-xs-2,
                .printer-preview-content .t36045 .col-xs-3,
                .printer-preview-content .t36045 .col-xs-4,
                .printer-preview-content .t36045 .col-xs-5,
                .printer-preview-content .t36045 .col-xs-6,
                .printer-preview-content .t36045 .col-xs-7,
                .printer-preview-content .t36045 .col-xs-8,
                .printer-preview-content .t36045 .col-xs-9,
                .printer-preview-content .t36045 .col-xs-10,
                .printer-preview-content .t36045 .col-xs-11,
                .printer-preview-content .t36045 .col-xs-12 {
                    float: left;
                    min-height: 1px;
                    margin-bottom: 32px;
                }

                .printer-preview-content .t36045 .col-xs-12 {
                    width: 100%;
                }

                .printer-preview-content .t36045 .col-xs-11 {
                    width: 91.66666667%;
                }

                .printer-preview-content .t36045 .col-xs-10 {
                    width: 83.33333333%;
                }

                .printer-preview-content .t36045 .col-xs-9 {
                    width: 75%;
                }

                .printer-preview-content .t36045 .col-xs-8 {
                    width: 66.66666667%;
                }

                .printer-preview-content .t36045 .col-xs-7 {
                    width: 58.33333333%;
                }

                .printer-preview-content .t36045 .col-xs-6 {
                    width: 50%;
                }

                .printer-preview-content .t36045 .col-xs-5 {
                    width: 41.66666667%;
                }

                .printer-preview-content .t36045 .col-xs-4 {
                    width: 33.33333333%;
                }

                .printer-preview-content .t36045 .col-xs-3 {
                    width: 25%;
                }

                .printer-preview-content .t36045 .col-xs-2 {
                    width: 16.66666667%;
                }

                .printer-preview-content .t36045 .col-xs-1 {
                    width: 8.33333333%;
                }

                .printer-preview-content .t36045 .col-no-margin {
                    margin-bottom: 0 !important;
                }

                .printer-preview-content .t36045 .clear-fix {
                    clear: both;
                }

                .printer-preview-content .t36045 .half-margin-top {
                    margin-top: 8px !important;
                }

                .printer-preview-content .t36045 .half-margin-bottom {
                    margin-bottom: 8px !important;
                }

                .printer-preview-content .t36045 .margin-top {
                    margin-top: 16px !important;
                }

                .printer-preview-content .t36045 .margin-bottom {
                    margin-bottom: 16px !important;
                }

                .printer-preview-content .t36045 .double-margin-top {
                    margin-top: 32px !important;
                }

                .printer-preview-content .t36045 .double-margin-bottom {
                    margin-bottom: 32px !important;
                }

                /* ### BASE - TABLE STYLING ### */
                .printer-preview-content .t36045 table,
                .printer-preview-content .t36045 .table {
                    width: 100%;
                    max-width: 100%;
                    background-color: transparent;
                    border-collapse: collapse;
                }

                .printer-preview-content .t36045 table thead {
                    display: table-row-group;
                }

                .printer-preview-content .t36045 table tbody tr {
                    page-break-inside: avoid !important;
                    page-break-after: auto !important;
                }

                .printer-preview-content .t36045 table tbody tr td {
                    page-break-inside: avoid !important;
                }

                .printer-preview-content .t36045 th {
                    white-space: nowrap;
                    text-align: left;
                    vertical-align: middle;
                    border-top: 0;
                    border-bottom: 0;
                }

                .printer-preview-content .t36045 td {
                    vertical-align: middle;
                    border-top: 0;
                    border-bottom: 0;
                }

                .printer-preview-content .t36045 .order-table tbody>tr:nth-child(odd) td {
                    background-color: #f9f9f9;
                }

                .printer-preview-content .t36045 .pricing-table tbody>tr:nth-child(even)>td {
                    background-color: #f9f9f9;
                }

                .printer-preview-content .t36045 .pricing-table tbody>tr>td.pricing-table-title {
                    word-break: break-all;
                }

                .printer-preview-content .t36045 th.order-table-qty {
                    width: 10%;
                }

                .printer-preview-content .t36045 th.order-table-sign {
                    width: 30%;
                }

                .printer-preview-content .t36045 th.order-table-price {
                    width: 10%;
                }

                .printer-preview-content .t36045 th.order-table-item-total,
                .printer-preview-content .t36045 th.order-table-reason {
                    width: 17%;
                }

                .printer-preview-content .t36045 th.order-table-return-comments {
                    width: 30%;
                }

                .printer-preview-content .t36045 .pricing-table-text {
                    text-align: right;
                    white-space: nowrap;
                }

                /* ### BASE -  IMAGE SIZING TO RETAIN LINE HEIGHT RYTHM) ### */
                .printer-preview-content .t36045 .-image-wrapper {
                    width: 64px;
                    max-height: 64px;
                }

                .printer-preview-content .t36045 .-image {
                    padding: 0 4px;
                    page-break-inside: avoid !important;
                    max-width: 64px;
                }

                /* ### BASE - LISTS RESET ### */
                .printer-preview-content .t36045 ul {
                    list-style: none;
                }

                .printer-preview-content .t36045 li {
                    color: #333333;
                    list-style: none;
                }

                /* ### BASE - LOGO ### */
                .printer-preview-content .t36045 .logo-wrapper {
                    display: inline-block;
                    width: 100%;
                }

                .printer-preview-content .t36045 .logo {
                    float: left;
                    padding-right: 15px;
                    max-width: 100%;
                    max-height: 108.0px;
                }

                /* ### BASE - BARCODE ### */
                .printer-preview-content .t36045 .order-number-barcode,
                .printer-preview-content .t36045 .-barcode {
                    display: block;
                }

                /* ### BASE - ADDITONAL COMMON SHARED TYPOGRAPHY AND ALIGNMENT ### */
                .printer-preview-content .t36045 .address {
                    margin-right: 5%;
                }

                .printer-preview-content .t36045 .notes-title,
                .printer-preview-content .t36045 .return-codes {
                    margin: 8px 0;
                }

                /* ### BASE - HORIZONTAL RULE MARKS ### */
                .printer-preview-content .t36045 hr {
                    background: #f89900;
                    border-top: 0;
                    border: 0;
                    height: 2px;
                    width: 100%;
                    margin-bottom: -2px;
                }

            }

        </style>
        <!-- Template Specific Styling -->
        <style type='text/css'>
            @media screen,
            print {

                /* ### DESIGN SPECIFIC - TYPOGRAPHY ### */
                .printer-preview-content .t36045 h1 {
                    font-family: 'Lato';
                    font-weight: bold;
                    color: #f89900;
                }

                .printer-preview-content .t36045 h2 {
                    font-family: 'Lato';
                }

                .printer-preview-content .t36045 h3 {
                    font-family: 'Lato';
                    color: #f89900;
                }

                /* ### DESIGN SPECIFIC - LOGO POSITIONING ### */
                .printer-preview-content .t36045 .logo {
                    float: right;
                    padding-right: 0;
                    margin-bottom: 16px;
                }

                /* ### DESIGN SPECIFIC - STORE DETAILS ### */
                .printer-preview-content .t36045 .shop-block {
                    text-align: center;
                }

                .printer-preview-content .t36045 .shop-block .shop-address-block b,
                .printer-preview-content .t36045 .shop-block .shop-address-block b * {
                    color: #000000;
                }

                .printer-preview-content .t36045 .shop-block .shop-domain {
                    color: #f89900;
                }

                .printer-preview-content .t36045 .shop-return-address b,
                .printer-preview-content .t36045 .shop-return-address b * {
                    color: #000000;
                }

                /* ### DESIGN SPECIFIC - ORDER DETAILS ### */
                .printer-preview-content .t36045 .order-details-title {
                    display: inline-block;
                    font-weight: bold;
                    color: #000000;
                }

                /* ### DESIGN SPECIFIC - BILL TO AND SHIP TO ADDRESS ### */
                .printer-preview-content .t36045 .address-title {
                    font-weight: bold;
                    color: #000000;
                }

                /* ### DESIGN SPECIFIC - TABLE HEADER ### */
                .printer-preview-content .t36045 .order-table thead tr th {
                    padding-left: 4px;
                    padding-right: 4px;
                    border-top: 2px solid #f89900;
                    padding-top: 6px;
                    border-bottom: 2px solid #d3d3d3;
                    padding-bottom: 6px;
                    font-weight: bold;
                    color: #f89900;
                }

                /* ### DESIGN SPECIFIC - TABLE BODY (SHARED) ### */
                .printer-preview-content .t36045 .order-table tbody tr td,
                .printer-preview-content .t36045 .pricing-table tbody tr td {
                    padding-left: 4px;
                    padding-right: 4px;
                    border-top: 0;
                    padding-top: 8px;
                    border-bottom: 1px solid #d3d3d3;
                    padding-bottom: 7px;
                }

                /* ### DESIGN SPECIFIC - ORDER TABLE SPECIFIC ### */
                .printer-preview-content .t36045 .order-table tbody>tr>td.line-item-description,
                .printer-preview-content .t36045 .order-table tbody>tr>td.line-item-qty {
                    font-weight: bold;
                    color: #000000;
                }

                .printer-preview-content .t36045 .order-table tbody>tr>td.line-item-description p.line-item-sku {
                    font-weight: normal;
                }

                /* ### DESIGN SPECIFIC - PRICING TABLE SPECIFIC ### */
                .printer-preview-content .t36045 .pricing-table tbody>tr.pricing-table-total-row>td {
                    border-top: 2px solid #f89900;
                    border-bottom: 2px solid #f89900;
                    padding-bottom: 6px;
                }

                .printer-preview-content .t36045 .pricing-table tbody>tr>td.pricing-table-title,
                .printer-preview-content .t36045 .pricing-table tbody>tr>td.pricing-table-title span {
                    font-weight: bold;
                    color: #000000;
                }

                .printer-preview-content .t36045 .pricing-table tbody>tr.pricing-table-total-row .pricing-table-title,
                .printer-preview-content .t36045 .pricing-table tbody>tr.pricing-table-total-row .pricing-table-text {
                    font-weight: bold;
                    color: #000000;
                }

                /* ### DESIGN SPECIFIC - ORDER NOTES ### */
                .printer-preview-content .t36045 .notes-title {
                    font-weight: bold;
                    color: #000000;
                }

                /* ### DESIGN SPECIFIC - RETURN FORM REASON CODES ### */
                .printer-preview-content .t36045 .return-codes b,
                .printer-preview-content .t36045 .return-code b * {
                    font-weight: bold;
                    color: #000000;
                }

                /* ### DESIGN SPECIFIC - THANK YOU MESSAGE ### */
                .printer-preview-content .t36045 .thanks-text {
                    text-align: center;
                    font-weight: bold;
                    color: #f89900;
                }

                .printer-preview-content .t36045 .thanks-text * {
                    font-weight: bold;
                    color: #f89900;
                }

                /* ### DESIGN SPECIFIC - GIFT MESSAGE ### */
                .printer-preview-content .t36045 .gift-text {
                    text-align: center;
                    font-weight: bold;
                    width: 80%;
                    margin: 0 10%;
                    padding-bottom: 16px;
                    font-size: 18px;
                }

                .printer-preview-content .t36045 .gift-text * {
                    font-weight: bold;
                    font-size: 18px;
                }

                .printer-preview-content .t36045 .gift-text svg {
                    padding-bottom: 8px;
                }

                /* ### DESIGN SPECIFIC - TERMS AND CONDITIONS ### */
                .printer-preview-content .t36045 .terms-text {
                    font-size: 10px;
                    text-align: center;
                }

                .printer-preview-content .t36045 .terms-text * {
                    font-size: 10px;
                }

                /* ### DESIGN SPECIFIC - SOCIAL ICONS ### */
                .printer-preview-content .t36045 .social-icons {
                    display: inline;
                    width: 20px;
                    margin: 8px 4px;
                }

            }

        </style>
        <div class='printer-preview-content' contenteditable='true' spellcheck='false' title='invoice'>
            <div class='t36045'>
                <div class='row'>
                    <div id='header-row'>
                        <div class='col-xs-6'>
                            <div class='template-title'>
                                <h1 class='editable' data-key='template_type_name'>Gate Pass</h1>
                            </div>
                            <ul class='order-details'>
                                <li class='order-details-invoice'>
                                    <span class='order-details-title editable' data-key='invoice_number'>Pass No
                                        :</span>
                                    <span class='order-details-text'>#{{$pass->id}} /  {{asset('logo.png')}}</span>
                                </li>
                                <li class='order-details-date'>
                                    <span class='order-details-title editable' data-key='date'>Date Created :</span>
                                    <span
                                        class='order-details-text'>{{ Carbon\Carbon::parse($pass->gate_pass_date)->format('j-M-y') }}</span>
                                </li>
                                <li class='order-details-payment'>
                                    <span class='order-details-title editable' data-key='payment_method'>Pass Type
                                        :</span>
                                    <span class='order-details-text'>Autre</span>
                                </li>

                                <li class='order-details-shipping'>
                                    <span class='order-details-title editable' data-key='shipping_method'>Date of Return
                                        :</span>
                                    <span class='order-details-text'></span>
                                </li>
                            </ul>
                        </div>
                        <div class='col-xs-6 col-no-margin'>
                            <div class='logo-wrapper'>

                                <img class='logo' alt='Logo'
                                    src='{{asset('logo.png')}}'>
                            </div>
                        </div>
                    </div>
                </div>


                <div class='row'>
                    <div class='col-xs-2'>
                        <div class='address-title bill-to-title editable' data-key='bill_to'>Picker Details :</div>
                    </div>
                    <div class='col-xs-4'>
                        <ul class='address'>

                            <li>{{ $pass->name_of_requester }}</li>
                            <li>{{ $pass->vehicle_registration }}</li>
                        </ul>
                    </div>

                </div>
                <div class='row'>
                    <div class='col-xs-12 col-no-margin'>
                        <table class='order-table table'>
                            <thead>
                                <tr>
                                    <th class='order-table-title editable' data-key='item'>Item</th>
                                    <th class='order-table-qty text-center editable' data-key='qty'>Quantity</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pass->items as $item)
                                    <tr>
                                        <td class='line-item-description'>
                                            <p style='font-weight: bold;'>
                                                {{$item->item_description}} </p>

                                            <p class='line-item-sku'> <i>Serial</i> : {{$item->serial}} </p>


                                        </td>
                                        <td class='text-center line-item-qty'>×  {{$item->qty}}</td>


                                    </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
                <div class='row' style="margin-top: 50px">

                    <div class='col-xs-12'>
                        <table class='order-table  table'>
                            <thead>
                                <tr>
                                    <th class='order-table-sign editable' data-key='item'>Signatory</th>
                                    <th class='order-table-title  editable' data-key='qty'>Name</th>
                                    <th class='order-table-sign text-center editable' data-key='qty'>Signature</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pass->signatories as $sign)
                                <tr>
                                    <td class=''>{{$sign->level}} : </td>
                                    <td class=''>{{$sign->name}}</td>
                                    <td class=''></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-xs-12 margin-bottom'>
                        <div class='thanks-text full-editable' data-key='thanks'>
                            <p>
                            </p>
                            <p>
                            </p>
                            <p>
                            </p>
                            <p><br>
                            </p>
                            <p><br>
                            </p>
                            <p>Please return a copy of this document to security for filing<br>
                            </p>
                            <p></p>
                            <p></p>
                            <p></p>
                        </div>
                        <div class='terms-text full-editable' data-key='terms_and_conditions'>
                            <p>
                            </p>
                            <p>
                            </p>
                            <p><b>Acceler Global Logisitics</b></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-xs-12 shop-block col-no-margin'>
                        <div class='shop-domain editable' data-key='shop_domain'>
                            acceler.co.ke
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
