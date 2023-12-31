Project Overview: Develop a web-based inventory and sales management system for a paper mill specializing in packaging paper (Test liner), using local LAMP servers and ESP32-CAMs for tracking. The system should be independent of the internet, battery-powered, and accessible via WiFi network.

Key Features:

1.  Database Design: Create a database to track rolls of paper, each identified by a unique QR code. Key attributes include:

    -   Reel Number
    -   GSM (130 GSM)
    -   Grade
    -   Width (200-250 cm range)
    -   Length
    -   Breaks
    -   Comments
    -   Current Location
    -   Status (In-stock, Shipped, Sold)
2.  QR Code Integration: Generate QR codes containing roll information. Use ESP32-CAMs to scan these codes and update the database based on the roll's location and status.

3.  Web Interface: Develop simple web pages for:

    -   Entering roll data and generating QR codes.
    -   Updating roll status (e.g., in-stock, sold, shipping).
    -   Entering truck information at the weight station (truck number, loaded, unloaded).
    -   Filling out order forms for shipping (customer info, roll info).
    -   Finalizing shipping lists and confirming loads for trucks.
    -   Entering raw material data (OCC types, additives, chemicals) including supplier details and weights.
4.  Inventory Tracking: Use ESP32-CAMs in different zones to track roll movement. Update the database when a roll moves between zones or gets loaded onto a truck.

5.  Order Processing and Shipping:

    -   Process orders based on shipping lists.
    -   Use forklift-mounted cameras to track loading.
    -   Confirm loaded rolls and update the database accordingly.
    -   Calculate net weights at the weight station for invoicing.
6.  Invoicing and Reporting:

    -   Automatically generate packing lists and invoices post-weighing.
    -   Track sales, profits, and raw material usage (daily, weekly, monthly).
7.  Raw Material Management: Manage and record incoming raw materials (OCC, additives, chemicals), including weight and supplier information.

Day-to-Day Scenario:

-   Production generates rolls, which are then recorded, QR-coded, and moved to different zones.
-   Trucks arriving for delivery or pickup are weighed and recorded.
-   For deliveries, a shipping list is provided, rolls are loaded onto the truck, re-weighed, and invoiced before departure.
-   For incoming supplies, record the net weight for payment processing.

Additional Notes:

-   The system should support a load capacity of up to 24,000 kg per truck, with average roll weights of 2,000-2,400 kg.
-   Maintain a record of all input (raw materials) and output (rolls) for accurate tracking of inventory and financials.
