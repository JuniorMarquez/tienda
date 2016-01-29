<?php
//Headings
$_['lang_title'] = 'New amazon listing';
$_['lang_openbay'] = 'OpenBay pro';
$_['lang_amazon'] = 'Amazon';

//Buttons
$_['button_search'] = 'Search';
$_['button_new'] = 'Create new product';
$_['button_return'] = 'Back to products';
$_['button_amazon_price'] = "Get amazon's price";
$_['button_list'] = "List on amazon";

//Text
$_['text_products_sent'] = 'Products were sent for processing';
$_['text_view_on_amazon'] = 'View on amazon';
$_['text_list'] = 'List';
$_['text_new'] = 'New';
$_['text_used_like_new'] = 'Used - Like new';
$_['text_used_very_good'] = 'Used - very good';
$_['text_used_good'] = 'Used - good';
$_['text_used_acceptable'] = 'Used - acceptable';
$_['text_collectible_like_new'] = 'Collectible - Like new';
$_['text_collectible_very_good'] = 'Collectible - very good';
$_['text_collectible_good'] = 'Collectible - good';
$_['text_collectible_acceptable'] = 'Collectible - acceptable';
$_['text_refurbished'] = 'Refurbished';
$_['help_sku'] = "Unique product's iD assigned by the merchant";
$_['help_restock_date'] = "This is the date you will be able to ship any back-ordered items to a customer. this date should not be greater than 30 days from the date listed or orders received may automatically be canceled.";
$_['help_sale_price'] = "Sale price must have a start and end date";
$_['lang_not_in_catalog'] = "Or, if it's not in the catalog&nbsp;&nbsp;&nbsp;";

//Table columns
$_['column_image'] = 'Image';
$_['column_asin'] = 'ASIN';
$_['column_price'] = 'Price';
$_['column_action'] = 'Action';
$_['column_name'] = 'Product name';
$_['column_model'] = 'Model';
$_['column_combination'] = 'Combination';
$_['column_sku'] = 'SKU';
$_['column_amazon_sku'] = 'Amazon item sKU';

//Form entry
$_['entry_sku'] = 'SKU:';
$_['entry_condition'] = 'Condition:';
$_['entry_condition_note'] = 'Condition note:';
$_['entry_price'] = 'Price:';
$_['entry_sale_price'] = 'Sale price:';
$_['entry_quantity'] = 'Quantity:';
$_['entry_start_selling'] = 'Available from date:';
$_['entry_restock_date'] = 'Restock date:';
$_['entry_country_of_origin'] = 'Country of origin:';
$_['entry_release_date'] = 'Release date:';
$_['entry_from'] = 'Date from';
$_['entry_to'] = 'Date to';
$_['entry_option'] = 'Variant';

//Form input place holders
$_['lang_placeholder_search'] = 'Enter product name, uPC, eAN, iSBN or aSIN';
$_['lang_placeholder_condition'] = 'Use this box to describe the condition of your products.';

//Tab headers
$_['item_links_header_text'] = 'Item links';
$_['quick_listing_header_text'] = 'Quick listing';
$_['advanced_listing_header_text'] = 'Advanced listing';
$_['saved_header_text'] = 'Saved listings';
$_['lang_tab_main'] = 'Main';

//Tabs
$_['item_links_tab_text'] = 'Item links';
$_['quick_listing_tab_text'] = 'Quick listing';
$_['advanced_listing_tab_text'] = 'Advanced listing';
$_['saved_tab_text'] = 'Saved listings';
$_['tab_required_info'] = 'Required info';
$_['tab_additional_info'] = 'Additional options';

//Quick/advanced listing tabs
$_['quick_listing_description'] = 'Use this method when matching product already exist in amazon catalogue. matching is found by amazon using standard product id (ASIN, iSBN, uPS, eAN)';
$_['advanced_listing_description'] = 'Use this method to create new listings on amazon.';
$_['listing_row_text'] = 'Listing for product:';
$_['already_saved_text'] = 'This product is already in saved listings. clic edit if you want to revise.';
$_['save_button_text'] = 'Save';
$_['save_upload_button_text'] = 'Save and upload';
$_['saved_listings_button_text'] = 'View saved listings';
$_['cancel_button_text'] = 'Cancel';
$_['field_required_text'] = 'This field is required!';
$_['not_saved_text'] = 'Listing was not saved. check your input.';
$_['chars_over_limit_text'] = 'characters over limit.';
$_['minimum_length_text'] = 'Minimum length is';
$_['characters_text'] = 'characters';
$_['delete_confirm_text'] = 'Are you sure?';
$_['clear_image_text'] = 'Clear';
$_['browse_image_text'] = 'Browse';
$_['category_selector_field_text'] = 'Amazon category:';

//Item links tab
$_['item_links_description'] = 'Here you can add and edit product links to already existing amazon items without listing them from openCart. this will allow stock control between enabled marketplaces. if you have openStock installed - this will also allow you to link item options to individual amazon sKUs. (Uploading products from openCart to amazon will automaticaly add links)';
$_['new_link_table_name'] = 'New link';
$_['new_link_product_column'] = 'Product';
$_['new_link_sku_column'] = 'SKU';
$_['new_link_amazon_sku_column'] = 'Amazon item sKU';
$_['new_link_action_column'] = 'Action';
$_['item_links_table_name'] = 'Item links';

//Marketplaces
$_['marketplaces_field_text'] = 'Marketplace';
$_['marketplaces_help'] = 'You can choose default marketplace in amazon extension settings.';
$_['text_germany'] = 'Germany';
$_['text_france'] = 'France';
$_['text_italy'] = 'Italy';
$_['text_spain'] = 'Spain';
$_['text_united_kingdom'] = 'United Kingdom';

//Saved listings tab
$_['saved_listings_description'] = 'This is the list of product listings which are saved locally and ready to be uploaded to amazon. clic upload to post.';
$_['actions_edit_text'] = 'Edit';
$_['actions_remove_text'] = 'Remove';
$_['upload_button_text'] = 'Upload';
$_['name_column_text'] = 'Name';
$_['model_column_text'] = 'Model';
$_['sku_column_text'] = 'SKU';
$_['amazon_sku_column_text'] = 'Amazon item sKU';
$_['actions_column_text'] = 'Action';
$_['saved_localy_text'] = 'Listing saved localy.';
$_['uploaded_alert_text'] = 'Saved listing(s) uploaded!';
$_['upload_failed'] = 'Failed uploading product with sKU: "%s". reason: "%s" uploading process canceled.';

//Item links
$_['links_header_text'] = 'Link items';
$_['links_desc1_text'] = 'Linking your items will allow for stock control on your amazon listings.<br /> for each item that is updated the local stock (the stock available in your openCart store) will update your amazon listing';
$_['links_desc2_text'] = 'You can link items manualy by entering amazon sKU and product name or load all unlinked products and then enter amazon sKUs. (Uploading products from openCart to amazon will automaticaly add links)';
$_['links_load_btn_text'] = 'Load';
$_['links_new_link_text'] = 'New link';
$_['links_autocomplete_product_text'] = 'Product<span class="help">(Autocompletar from name)</span>';
$_['links_amazon_sku_text'] = 'Amazon item sKU';
$_['links_action_text'] = 'Action';
$_['links_add_text'] = 'Add';
$_['links_add_sku_tooltip'] = 'Add another sku';
$_['links_remove_text'] = 'Remove';
$_['links_linked_items_text'] = 'Linked items';
$_['links_unlinked_items_text'] = 'Unlinked items';
$_['links_name_text'] = 'Name';
$_['links_model_text'] = 'Model';
$_['links_sku_text'] = 'SKU';
$_['links_amazon_sku_text'] = 'Amazon item sKU';
$_['links_sku_empty_warning'] = 'Amazon sKU can not be empty!';
$_['links_name_empty_warning'] = 'Product name can not be empty!';
$_['links_product_warning'] = 'Product does not exist. Please use autocomplete values.';
$_['option_default'] = '-- select option --';

//Listing edit page
$_['text_edit_heading'] = 'Listing overview';
$_['text_has_saved_listings'] = 'This product has one or more localy saved listings.';
$_['text_product_links'] = 'Product links';
$_['button_create_new_listing'] = "Create new listing";
$_['button_remove_links'] = "Remove links";
$_['button_saved_listings'] = "View saved listings";

//Errors
$_['lang_error_load_nodes'] = 'Unable to load browse nodes';
$_['text_error_connecting'] = 'Warning: there was problem connecting to Welford media aPI servers. Please check your openBay pro amazon extension settings. if the problem persists, please contact Welford support.';
$_['error_text_missing'] = 'You must enter some search details';
$_['error_data_missing'] = 'Required data is missing';
$_['error_missing_asin'] = 'ASIN is missing';
$_['error_marketplace_missing'] = 'Please select a marketplace';
$_['error_condition_missing'] = "Please select condition";
$_['error_fetch'] = 'Could not get the data';
$_['error_amazon_price'] = 'Could not get the price from amazon';
$_['error_sku'] = 'You must enter an sKU for the item';
$_['error_price'] = 'You must enter a price for the item';
$_['error_sending_products'] = 'Could not send products for listing. Please contact openBay pro support';
$_['lang_no_results'] = 'No results found';
$_['error_no_products_selected'] = 'No products were selected for listing';
$_['error_not_searched'] = 'Search for matching items before you try to list. items must be matched against an amazon catalog item';

//Messages
$_['text_product_sent'] = 'Product was successfully sent to amazon.';
$_['text_product_not_sent'] = 'Product was not sent to amazon. reason: %s';
$_['text_links_removed'] = 'Amazon product links deleted';



?>