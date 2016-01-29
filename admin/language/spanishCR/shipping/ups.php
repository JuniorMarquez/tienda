<?php
//heading
$_['heading_title']                = 'UPS';

// text
$_['text_shipping']                = 'Shipping';
$_['text_success']                 = 'Success: You have modified uPS shipping!';
$_['text_regular_daily_pickup']    = 'Regular daily pickup';
$_['text_daily_pickup']            = 'Daily pickup';
$_['text_customer_counter']        = 'Customer counter';
$_['text_one_time_pickup']         = 'One time pickup';
$_['text_on_call_air_pickup']      = 'On call air pickup';
$_['text_letter_center']           = 'Letter center';
$_['text_air_service_center']      = 'Air service center';
$_['text_suggested_retail_rates']  = 'Suggested retail rates (UPS store)';
$_['text_package']                 = 'Package';
$_['text_ups_letter']              = 'UPS Letter';
$_['text_ups_tube']                = 'UPS tube';
$_['text_ups_pak']                 = 'UPS pak';
$_['text_ups_express_box']         = 'UPS express box';
$_['text_ups_25kg_box']            = 'UPS 25kg box';
$_['text_ups_10kg_box']            = 'UPS 10kg box';
$_['text_us']                      = 'US origin';
$_['text_ca']                      = 'Canada origin';
$_['text_eu']                      = 'European union origin';
$_['text_pr']                      = 'Puerto rico origin';
$_['text_mx']                      = 'Mexico origin';
$_['text_other']                   = 'All other origins';
$_['text_test']                    = 'Test';
$_['text_production']              = 'Production';	
$_['text_residential']             = 'Residential';
$_['text_commercial']              = 'Commercial';
$_['text_next_day_air']            = 'UPS next day air';
$_['text_2nd_day_air']             = 'UPS second day air';
$_['text_ground']                  = 'UPS ground';
$_['text_3_day_select']            = 'UPS three-Day select';
$_['text_next_day_air_saver']      = 'UPS next day air saver';
$_['text_next_day_air_early_am']   = 'UPS next day air early a.M.';
$_['text_2nd_day_air_am']          = 'UPS second day air a.M.';
$_['text_saver']                   = 'UPS saver';
$_['text_worldwide_express']       = 'UPS Worldwide express';
$_['text_worldwide_expedited']     = 'UPS Worldwide expedited';
$_['text_standard']                = 'UPS standard';
$_['text_worldwide_express_plus']  = 'UPS Worldwide express plus';
$_['text_express']                 = 'UPS express';
$_['text_expedited']               = 'UPS expedited';
$_['text_express_early_am']        = 'UPS express early a.M.';
$_['text_express_plus']            = 'UPS express plus';
$_['text_today_standard']          = 'UPS today standard';
$_['text_today_dedicated_courier'] = 'UPS today dedicated courier';
$_['text_today_intercity']         = 'UPS today intercity';
$_['text_today_express']           = 'UPS today express';
$_['text_today_express_saver']     = 'UPS today express saver';

// entry
$_['entry_key']                    = 'Access Key:<span class="help">Enter the XML rates access key assigned to you by uPS.</span>';
$_['entry_username']               = 'Username:<span class="help">Enter your uPS services account username.</span>';
$_['entry_password']               = 'Password:<span class="help">Enter your uPS services account password.</span>';
$_['entry_pickup']                 = 'Pickup method:<span class="help">How do you give packages to uPS (only used when origin is uS)?</span>';
$_['entry_packaging']              = 'Packaging type:<span class="help">What kind of packaging do you use?</span>';
$_['entry_classification']         = 'Customer classification code:<span class="help">01 - if you are billing to a uPS account and have a daily uPS pickup, 03 - if you do not have a uPS account or you are billing to a uPS account but do not have a daily pickup, 04 - if you are shipping from a retail outlet (only used when origin is uS)</span>';
$_['entry_origin']                 = 'Shipping origin code:<span class="help">What origin point should be used (this setting affects only what uPS product names are shown to the user)</span>';
$_['entry_city']                   = 'Origin city:<span class="help">Enter the name of the origin city.</span>';
$_['entry_state']                  = 'Origin state/Province:<span class="help">Enter the two-letter code for your origin state/province.</span>';
$_['entry_country']                = 'Origin country:<span class="help">Enter the two-letter code for your origin country.</span>';
$_['entry_postcode']               = 'Origin Zip/Postal code:<span class="help">Enter your origin zip/postalcode.</span>';
$_['entry_test']                   = 'Test mode:<span class="help">Use this module in test (YES) or production mode (NO)?</span>';
$_['entry_quote_type']             = 'Quote type:<span class="help">Quote for residential or commercial delivery.</span>';
$_['entry_service']                = 'Services:<span class="help">Select the uPS services to be offered.</span>';
$_['entry_insurance']              = 'Enable insurance:<span class="help">Enables insurance with product total as the value</span>';
$_['entry_display_weight']         = 'Display delivery Weight:<br /><span class="help">Do you want to display the shipping weight? (e.g. delivery Weight : 2.7674 Kg\'s)</span>';
$_['entry_weight_class']           = 'Weight class:<span class="help">Set to kilograms or pounds.</span>';
$_['entry_length_class']           = 'Length class:<span class="help">Set to centimeters or inches.</span>';
$_['entry_dimension']			   = 'Dimensions (L x W xh):<br /><span class="help">This is assumed to be your average packing box size. individual item dimensions are not supported at this time so you must enter average dimensions like 5x5x5.</span>';
$_['entry_tax_class']              = 'Tax class:';
$_['entry_geo_zone']               = 'Geo Zone:';
$_['entry_status']                 = 'Status:';
$_['entry_sort_order']             = 'Sort order:';
$_['entry_debug']      			   = 'Debug mode:<br /><span class="help">Saves send/recv data to the system log</span>';

// error
$_['error_permission']             = 'Warning: You do not have permission to modify uPS (US) shipping!';
$_['error_key']                    = 'Access Key required!';
$_['error_username']               = 'Username required!';
$_['error_password']               = 'Password required!';
$_['error_city']                   = 'Origin city!';
$_['error_state']                  = 'Origin state/Province required!';
$_['error_country']                = 'Origin country required!';
$_['error_dimension']              = 'Average dimensions required!';
?>