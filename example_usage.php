<?php

// Include the LicenseManager module
require_once 'path/to/LicenseManager.php';

use LicenseManager\LicenseManager;

// Create a new instance of LicenseManager
$licenseManager = new LicenseManager();

// Example 1: Create a product
$product = $licenseManager->createProduct('Product Name', 'Product Description');
echo "Product created: " . print_r($product, true) . "\n";

// Example 2: Create a reseller
$reseller = $licenseManager->createReseller('Reseller Name', 'Reseller Contact');
echo "Reseller created: " . print_r($reseller, true) . "\n";

// Example 3: Create a discount
$discount = $licenseManager->createDiscount('Discount Name', 20); // 20% discount
echo "Discount created: " . print_r($discount, true) . "\n";

// Example 4: Create a license
$license = $licenseManager->createLicense($product['id'], $reseller['id'], $discount['id']);
echo "License created: " . print_r($license, true) . "\n";

// Example 5: Bulk assignment of licenses
$licenseIds = [1, 2, 3]; // Example license IDs
$result = $licenseManager->bulkAssignLicenses($licenseIds, $reseller['id']);
echo "Bulk assignment result: " . print_r($result, true) . "\n";

?>