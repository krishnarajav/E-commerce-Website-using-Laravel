<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        //Product 1
        Product::create([
            'name' => 'Jackfruit Chips (500g)',
            'description' => 'Indulge in the irresistible crunch of our Jackfruit Chips (500g). Sliced from ripe, golden jackfruits, each chip is a savory delight that captures the natural sweetness of the fruit. Expertly crafted and lightly seasoned, these chips offer a perfect balance of flavor and crispiness. Snack guilt-free on this tropical twist to traditional chips, and savor the unique taste of jackfruit in every bite. Ideal for those seeking a wholesome, gluten-free snack option with a burst of exotic flavor.',
            'price' => 250.00,
            'image1' => 'images/1-1.png',
            'image2' => 'images/1-2.png',
            'rating' => 4.2,
        ]);

        //Product 2
        Product::create([
            'name' => 'Jackfruit in BBQ Sauce (0.5L)',
            'description' => 'Experience the savory fusion of sweet and smoky with our Jackfruit in BBQ Sauce (1L). Harvested at peak ripeness, the tender jackfruit absorbs the rich, tangy barbecue flavors, creating a deliciously wholesome and meaty alternative. Perfect for plant-based enthusiasts and barbecue lovers alike, this versatile 1-liter jar offers a convenient and mouthwatering solution for sandwiches, tacos, or bowls. Elevate your culinary experience with the natural goodness of jackfruit, slow-cooked to perfection and generously coated in our signature BBQ sauce. Delight in a cruelty-free, flavor-packed meal is ready to impress.',
            'price' => 300.00,
            'image1' => 'images/2-1.png',
            'image2' => 'images/2-2.png',
            'rating' => 4.5,
        ]);

        //Product 3
        Product::create([
            'name' => 'Jackfruit - Taste of Tropics (1kg)',
            'description' => 'Savor the exotic allure of the tropics with our 1kg pack of Jackfruit - Taste of the Tropics. Harvested at the peak of ripeness, each golden-hued, succulent piece encapsulates the sweet and fragrant essence of tropical paradise. Versatile and nutritious, our jackfruit is a culinary canvas, perfect for both sweet and savory creations. Whether added to smoothies, desserts, or savory dishes, this 1kg pack promises a taste adventure that transports you to sun-kissed orchards with every delicious bite. Immerse yourself in the luscious flavors of the tropics, brought to your kitchen in a convenient and generous package.',
            'price' => 325.00,
            'image1' => 'images/3-1.png',
            'image2' => 'images/3-2.png',
            'rating' => 4.3,
        ]);

        //Product 4
        Product::create([
            'name' => 'Jackfruit Crush (1L)',
            'description' => 'Immerse your senses in the luscious tropical goodness of our Jackfruit Crush Pulp (1L). Sourced from the finest ripe jackfruits, this 1-liter bottle is a treasure trove of sweet, fragrant pulp that captures the essence of the tropics. Perfect for smoothies, cocktails, or desserts, the velvety texture and natural sweetness of our jackfruit crush elevate your culinary creations. Indulge in the exotic allure of jackfruit, conveniently bottled and ready to infuse your dishes with a burst of tropical flavor. Unleash your creativity in the kitchen and let the taste of sun-ripened jackfruit transport you to paradise with every pour.',
            'price' => 160.00,
            'image1' => 'images/4-1.png',
            'image2' => 'images/4-2.png',
            'rating' => 4.1,
        ]);

        //Product 5
        Product::create([
            'name' => 'Jackfruit Papad (50pcs)',
            'description' => 'Discover the exquisite blend of tradition and flavor with our Jackfruit Papad (50pcs). Handcrafted with care, each papad is a delicate fusion of sun-dried jackfruit and spices, delivering a unique twist to this classic Indian snack. With a perfect balance of sweetness and savory goodness, these 50 pieces of jackfruit papads offer a crispy and delightful accompaniment to your meals. Enjoy the authentic taste of jackfruit in a convenient and ready-to-cook form, adding a burst of tropical flair to your dining experience. Elevate your palate with these savory delights that embody the rich culinary heritage of jackfruit.',
            'price' => 220.00,
            'image1' => 'images/5-1.png',
            'image2' => 'images/5-2.png',
            'rating' => 4.2,
        ]);

        //Product 6
        Product::create([
            'name' => 'Jackfruit Snacks (500g)',
            'description' => 'Embark on a flavorful journey with our Jackfruit Snacks (500g). Harvested at peak ripeness, these bite-sized delights offer a perfect blend of natural sweetness and savory satisfaction. Lightly seasoned to enhance the unique taste of jackfruit, this 500g pack is a wholesome and guilt-free snack option. Whether you are craving a nutritious on-the-go treat or a crunchy addition to your culinary creations, these jackfruit snacks deliver a burst of tropical goodness in every bite. Experience the joy of snacking with a twist – where health meets indulgence, and the exotic taste of jackfruit takes center stage.',
            'price' => 250.00,
            'image1' => 'images/6-1.png',
            'image2' => 'images/6-2.png',
            'rating' => 4.0,
        ]);
    }
}
