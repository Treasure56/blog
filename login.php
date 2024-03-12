<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                DEFAULT: "#0101cc",
                dark: "#390095",
              },
            },
          },
        },
      };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body>
    <section class="bg-light py-20 flex px-4 justify-center items-center">
      <div class="flex flex-col gap-5 max-w-[500px]">
        <h1 class="text-3xl font-bold text-left">Login</h1>
        <form class="w-full flex flex-col gap-4" method="POST" action="includes/loginsub.php">
          <?php require_once("includes/message.php");?>
          <div>
            <label for="email" class="block text-gray-700">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="w-full md:w-80 lg:w-96 px-3 py-2 border rounded-md"
            />
          </div>
          <div>
            <label for="password" class="block text-gray-700">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              class="w-full md:w-80 lg:w-96 px-3 py-2 border rounded-md"
            />
          </div>

          <button
            type="submit"
            class="w-full md:w-80 lg:w-96 px-3 py-2 border rounded-md bg-red-400 text-white"
          >
            Sign In
          </button>
          <p class="text-center">
            Don't have an account?
            <a href="" class="text-red-400 hover:underline">Create one</a>
          </p>
        </form>
      </div>
    </section>
  </body>
</html>
