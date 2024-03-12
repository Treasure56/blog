<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
      integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd"
      crossorigin="anonymous"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              dark: {
                DEFAULT: "#101010",
                text: "#121212",
              },
              light: {
                DEFAULT: "#fefefe",
                text: "#fefedd",
              },
              primary: {
                DEFAULT: "#1861C8",
                dark: "#390095",
              },
              secondary: {
                DEFAULT: "#1EE0AC",
              },
            },
          },
        },
      };
    </script>
    <title>Document</title>
  </head>
  <body>
    <main>
      <div class="flex w-full">
        <div
          class="flex max-md:w-screen h-screen fixed top-0 left-[-110%] md:left-0 transition-md duration-300"
          id="sideMenu"
        >
          <div
            class="flex flex-col flex-shrink-0 w-72 pt-5 h-full fixed p-4 bg-white border-r border-gray-200 overflow-y-auto"
          >
            <div
              class="flex justify-between items-center sticky top-0 left-0 bg-white"
            >
              <a href="index.php">
                <img src="./img/logo.jpeg" alt="" class="w-24"
              /></a>
              <button class="md:hidden text-3xl" onclick="toggleSideMenu()">
                <i class="bi bi-x"></i>
              </button>
            </div>
            <div class="text-gray-600 flex flex-col gap-1 text-2xl">
              <p class="text-sm">MENU</p>
              <div
                class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100"
              >
                <i class="bi bi-columns-gap"></i>
                <a href="dashboard.php" class="text-sm">Dashboard</a>
              </div>
              <div
                class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100"
              >
                <i class="bi bi-bar-chart-line-fill"></i>
                <a href="forex.php" class="text-sm">New Blog</a>
              </div>
              <div
                class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100"
              >
                <i class="bi bi-currency-bitcoin"></i>
                <a href="bitcoin.php" class="text-sm">Upload Testimonial</a>
              </div>
              <div
                class="flex gap-2 rounded-3xl py-2 px-5 font-semibold items-center hover:text-primary hover:bg-blue-100"
              >
                <i class="bi bi-currency-exchange"></i>
                <a href="stock-exchange.php" class="text-sm">New portfolio</a>
              </div>
            </div>
          </div>
          <div
            class="bg-[#00000055] w-full md:hidden h-full"
            onclick="toggleSideMenu()"
          ></div>
        </div>
        <div class="w-72 flex-shrink-0 max-md:hidden"></div>
        <div class="w-full flex flex-col h-50">
          <div
            class="flex gap-4 h-16 items-center px-4 border-b border-gray-200 justify-between"
          >
            <button class="md:hidden" onclick="toggleSideMenu()">
              <i class="bi bi-list"></i>
            </button>
            <div class="flex gap-1 text-sm p-2 w-full max-md:hidden">
              <!-- TradingView Widget BEGIN -->
              
            <div class="flex flex-shrink-0 items-center gap-4">
              <div
                class="flex items-center justify-center size-7 bg-red-400 text-white rounded-full text-sm"
              >
                <i class="bi bi-person-fill"></i>
              </div>
              <div class="">
                <h1 class="text-sm text-red-400">Admin</h1>
                <p class="text-sm text-dark-text">Glory</p>
              </div>
            </div>
          </div>  
      </div>

      <section class="bg-light py-20 flex px-4 justify-center items-center">
        <div class="flex flex-col gap-5 max-w-[800px]">
          <h1 class="text-3xl font-bold text-left">Edit Blog</h1>
          <div class="card border border-gray-200 p-5">
           <div class="flex">
         <div class="flex flex-col ">
         <img src="includes/dp/65efa1c73f3162.06055768.png" alt="" width="200px" height="200px">
            <p class="font-bold text-xl">title</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempore, voluptates voluptatibus quam enim distinctio aperiam ex quaerat assumenda aliquid maxime nobis et, officia, labore dolorem qui animi atque quis!</p>
         </div>
           </div>
          </div>
        </div>
      </section>
    </main>
  </body>
  <script>
    function toggleSideMenu() {
      const menu = document.getElementById("sideMenu");
      menu.classList.toggle("[left:0_!important]");
    }
  </script>
</html>
