# Document

### A. About

This is a marketplace (or multi-vendor) website for UBC students to sell and buy products. The website has 3 views:

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
    
    - Have to explicitly set product location on admin page (hence only admin can do this), because this is external plugin, it has no access to dokan front end
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

Sometimes, MySQL will shut down unexpectedly. Follow this link to restore the database: [**https://stackoverflow.com/questions/18022809/how-to-solve-error-mysql-shutdown-unexpectedly**](https://stackoverflow.com/questions/18022809/how-to-solve-error-mysql-shutdown-unexpectedly)

- other options
- send credits
- MySQL backup