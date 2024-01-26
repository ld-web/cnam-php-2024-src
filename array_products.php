<?php

$products = [
    [
        'id' => 1,
        'name' => 'Jared',
        'price' => 185.19,
        'discount' => false,
        'description' => 'touch instrument question salmon key soap furniture girl act upward butter heat church mistake tube gone curve nearest separate addition judge table beat this',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 2,
        'name' => 'Howard',
        'price' => 64.56,
        'discount' => false,
        'description' => 'seeing color crack include wind pink been begun lower aid larger rose road sea mad favorite pay badly ability meet progress memory private hide',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 3,
        'name' => 'Daisy',
        'price' => 199.56,
        'discount' => true,
        'description' => 'pan pass familiar sit hello truck butter manner younger track obtain strike anyone circus for rod supply ourselves load problem today fighting national crew',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 4,
        'name' => 'Stella',
        'price' => 475.04,
        'discount' => false,
        'description' => 'plant rock work table case hand high easily bill along first arrangement it sign friend planet printed arrow die species nation discovery broken mark',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 5,
        'name' => 'Dylan',
        'price' => 314.11,
        'discount' => true,
        'description' => 'forth tongue eleven tightly greatly pupil pressure region program perhaps jungle nearest poem would won worry joined finger balance brush ranch trap voice went',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 6,
        'name' => 'Gertrude',
        'price' => 57.25,
        'discount' => false,
        'description' => 'wet father though production fighting cloth thousand warn arrangement ancient doubt no rocky plane cent brain into anywhere available very perfect snow organized bottom',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 7,
        'name' => 'Estelle',
        'price' => 84.70,
        'discount' => true,
        'description' => 'hay happen beauty rough positive consist discover available score shirt pupil very region special volume desk tie stick work dug chamber slip seems basis',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 8,
        'name' => 'Aaron',
        'price' => 48.75,
        'discount' => false,
        'description' => 'month basket pet news supper best somewhere noon path carried jungle aloud add bread canal main hair cannot making perhaps organization of high belt',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 9,
        'name' => 'Janie',
        'price' => 148.20,
        'discount' => false,
        'description' => 'oldest top said add goes double broken numeral ball jar pen roar slept which stop circus baby suppose possibly article metal try greater pleasure',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 10,
        'name' => 'Albert',
        'price' => 592.85,
        'discount' => true,
        'description' => 'easier main plain nor transportation knew warm increase worth guard particles active ago opinion position wonderful trace mail everywhere plenty recently herd orange middle',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 11,
        'name' => 'Donald',
        'price' => 609.6,
        'discount' => true,
        'description' => 'shirt base hang locate blood believed cold remember highest elephant way courage tank ride possible successful smallest broad organized cat share principle tin but',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 12,
        'name' => 'Pearl',
        'price' => 645.61,
        'discount' => false,
        'description' => 'throat storm job clothes greater nearer breath prize solar store teacher particularly numeral colony bare sum long spent information hospital leather shelter season than',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 13,
        'name' => 'Rachel',
        'price' => 123.75,
        'discount' => true,
        'description' => 'safety away total rocket drink calm forward sad eaten eye should forget anybody hunter national involved sight least fur glad alone lady bite wet',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 14,
        'name' => 'Jeff',
        'price' => 293.57,
        'discount' => true,
        'description' => 'gas directly worse care order cast particles surprise expression gift six till setting swept book you forgotten cry until some road headed swimming water',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 15,
        'name' => 'Theodore',
        'price' => 48.13,
        'discount' => false,
        'description' => 'heat steady pound planning saddle because cross needle living known there its cup everything balloon seeing face making manner tribe gather promised gain society',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 16,
        'name' => 'Eddie',
        'price' => 273.50,
        'discount' => true,
        'description' => 'recognize word given city getting pot driven shop hungry automobile cut hard difficult burn mountain rest blew tears desk paper hurried instrument degree hot',
        'image' => 'http://placekitten.com/300/300'
    ],
    [
        'id' => 17,
        'name' => 'Lydia',
        'price' => 542.18,
        'discount' => true,
        'description' => 'tried underline strength lead attempt fighting slave suit studying improve goes left using exist receive becoming oxygen review force funny additional ride let doing',
        'image' => 'http://placekitten.com/300/300'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produits</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CNAM PHP</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="prose lg:prose-xl mx-auto">
        <h1>Produits</h1>

        <div class="flex flex-wrap gap-4 justify-center">

            <?php foreach ($products as $product) { ?>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="!my-0 w-full rounded-t-lg" src="<?php echo $product['image']; ?>"
                        alt="<?php echo $product['name']; ?>" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <?php echo $product['name']; ?></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product['description']; ?>
                    </p>
                    <?php if ($product['discount']) { ?>
                    <p class="!my-0 bg-green-600 inline-flex p-2 rounded-lg text-white">
                        DISCOUNT
                    </p>
                    <?php } ?>
                    <div class="flex items-center justify-between">
                        <span
                            class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo $product['price']; ?>€</span>
                        <a href="#"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Voir
                            plus</a>
                    </div>
                </div>
            </div>


            <!-- <div>
                <h3><?php echo $product['name']; ?></h3>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />
            </div> -->

            <?php } ?>

        </div>
    </main>
</body>

</html>