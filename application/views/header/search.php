 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/boostrap.css" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">



        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

       

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }

            #suggestions{

                position: relative;
                z-index: 9999;
            }
            #autoSuggestionsList > li {
                background: none repeat scroll 0 0 #F3F3F3;
                border-bottom: 1px solid #E3E3E3;
                list-style: none outside none;
                padding: 3px 15px 3px 15px;
                text-align: left;
            }
            #autoSuggestionsList > li a {  color: #1d80c2; }
            .auto_list {
                border: 1px solid #E3E3E3;
                border-radius: 5px 5px 5px 5px;
                position: absolute;
                width: 100%;
            }

            .search-input {
                padding: 25px;
                border: solid 1px #CCCCCC;
                /* margin: 2% 10%; */
                background: #F8F8F8;
                border-radius: 25px;
                text-align: center;
                font-size: 20px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                /* box-sizing: border-box; */
                /* text-align: left; */
                font-size: 19px;
                /* font-family: inherit; */
                -webkit-box-shadow: 0px 0px 0px 1px #b8b8b8;
                -moz-box-shadow: 0px 0px 0px 1px #b8b8b8;
                /* box-shadow: 0px 0px 0px 1px #b8b8b8; */
                -webkit-background-clip: padding-box;
                -moz-background-clip: padding-box;
                background-clip: padding-box;
                border: 3px solid rgba(255,255,255,0.4);
                -webkit-border-radius: 30px;
                -moz-border-radius: 30px;
                border-radius: 30px;
                /* width: 100% !important; */
                max-width: none;
                height: 54px;
                min-height: 54px;
                padding: 0 45px 0 20px;
            }

            .left-searchbtn {
                border: 0px solid rgba(255,255,255,0.4);
                background: #F8F8F8;
                margin-left: -105px;
                background-repeat: no-repeat;
                font-size: 20px;
                float: right;
                margin-top: -37px;
                position: relative;
                padding: 0px;
                margin-right: 23px;
            }


        </style>