# InventorySales

### Understanding Your Requirements

1.  Product Tracking: Using QR codes to track paper rolls (Test liner, 130 GSM) with distinct widths (200, 210, 220, 230, 240, 250 cm).
2.  Database Management: A LAMP-based system for tracking rolls, their statuses (in-stock, shipped), locations, and associated transactions.
3.  Sales and Inventory Management: Handling sales, invoices, and tracking raw materials like OCC, additives, and chemicals.
4.  Web Interface: Enabling data entry and monitoring through a simple web interface accessible via local Wi-Fi.
5.  Scalability and Modularity: The system should be easily expandable and adaptable for future enhancements.

### Database Design

We'll create a MySQL database with several interconnected tables to manage your requirements efficiently:

#### 1\. Rolls Table

-   Fields: Reel Number, GSM, Grade, Width, Length, Breaks, Comments, Current Location, Status (In-stock, Shipped), QR Code.
-   Purpose: Track each roll from production to shipping.

#### 2\. Locations Table

-   Fields: Location ID, Zone Name, Description.
-   Purpose: Manage different zones in your facility.

#### 3\. Transactions Table

-   Fields: Transaction ID, Reel Number, Customer Info, Truck Info, Weight, Status (Loaded, Shipped), Invoice Details.
-   Purpose: Record sales transactions and shipping details.

#### 4\. Raw Materials Table

-   Fields: Material ID, Type (OCC, Chemicals), Supplier, Quantity, Net Weight, Gross Weight, Price.
-   Purpose: Manage inventory of raw materials.

#### 5\. Financial Table

-   Fields: Transaction ID, Total Sales, Costs, Profit, Date.
-   Purpose: Track financial transactions for sales and purchases.

#### 6\. Trucks Table

-   Fields: Truck ID, License Number, Tare Weight, Net Weight, Owner/Supplier Info.
-   Purpose: Record details of trucks entering and leaving the facility.

### Web Interface

-   Functionality: Data entry forms for rolls, transactions, raw materials, and trucks. Visualization of inventory levels, financial summaries, and transaction histories.
-   Technologies: PHP for server-side scripting, HTML/CSS for front-end design, JavaScript for interactive elements.

### Integration with ESP32-CAM

-   Use ESP32-CAM to scan QR codes and update the roll's location in the database.
-   Implement API endpoints in the PHP backend to receive data from ESP32-CAM devices.

### Scalability and Future Expansion

-   Design the database with normalization principles to reduce redundancy and improve scalability.
-   Modularize the web interface to allow easy addition of new features or modifications.

### Steps to Implement

1.  Database Setup: Install MySQL on your LAMP server and create the database with the above tables.
2.  Backend Development: Write PHP scripts to handle CRUD (Create, Read, Update, Delete) operations for each table.
3.  Frontend Development: Develop the web interface with user-friendly forms and dashboards.
4.  ESP32-CAM Integration: Program ESP32-CAM modules to communicate with the database through the PHP backend.
5.  Testing and Deployment: Test the system thoroughly for bugs and deploy it for use.
