# Document

### A. About

This is a marketplace (or multi-vendor) website for university students to sell and buy products. The website has 3 views:

1. Admin view to control everything about WordPress site and other vendors
2. Customer view for buyers to select products and check out
3. Vendor view for sellers to monitor their business and edit storefront

The website uses Wordpress CMS + WooCommerce + Dokan.

### B. Features

1. Woocommerce plugin provides the e-commerce online store view
2. Dokan plugin provides vendor dashboard view
3. Product geolocation plugin provides a product locator using Google Maps. This free plugin has all the features such as:
    - Show location on map
    - Show product cluster
    - Show product info if hover

    However it has some restrictions:

    - Only admin can set product location on admin page, because this is external plugin, it has no access to dokan front end
    - Might be able to modify this by adding code

### C. Local set up

1. Clone GitHub project code
2. Set up Xampp local server. Follow this link:

    [**https://themeisle.com/blog/install-xampp-and-wordpress-locally/**](https://themeisle.com/blog/install-xampp-and-wordpress-locally/)


### D. Run website locally

1. Open Xampp and start Apache + MySQL
2. To access the website, go to **[localhost/wordpress/](http://localhost/wordpress/)** in the browser
3. To access the admin dashboard, use the below credits:

    ```java
    Username: jillphan
    Password: ****
    ```

### E. Troubleshoot

Sometimes, MySQL shuts down unexpectedly. Follow this link to restore the database: [**https://stackoverflow.com/questions/18022809/how-to-solve-error-mysql-shutdown-unexpectedly**](https://stackoverflow.com/questions/18022809/how-to-solve-error-mysql-shutdown-unexpectedly)

- other options
- send credits
- MySQL backup

### D. Future improvements

WordPress is currently used because it is free and has many plugins for different features.
Besides, some options can be considered are:
- Spree-commerce
- Joomla + Joobi
- Hika Shop
Most of these provide multi-vendor platform for paid version only. More information can be found [here](https://www.figma.com/file/G8jTtTh1MPVoqQ5LZ6iORv/Ecommerce-web-research?node-id=0%3A1)

For the **product locator feature**, a plugin in WordPress is used. This plugin is not fully supported. More information can be found here:

[Link 1](https://github.com/alamgircsebd/product-geolocation-for-woo/)

[Link 2](https://wordpress.org/plugins/product-geolocation-for-woo/)

Dokan also provides this feature in paid version, which is fully supported and maintained.

*Note: All information above is self researched. Please get invitation to this [link](https://www.figma.com/file/G8jTtTh1MPVoqQ5LZ6iORv/Ecommerce-web-research?node-id=0%3A1) for more information*
