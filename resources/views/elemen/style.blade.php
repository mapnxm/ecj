    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    {{-- <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> --}}
    <title>English Conversation Website || LP3I Malang</title>
    <style>
        #profil.active {
            right: 1.25rem;
        }

        * {
          font-family: 'Open Sans',Arial, Helvetica, sans-serif;
          user-select: none;
        }

        /* .scroller { */
            /* text-overflow: ellipsis; */
            /* overflow: hidden;
            overflow-x: scroll; */
            /* padding: 0 2px; */
        /* } */
    </style>

    <script>

        /** @type {import('tailwindcss').Config} */
        export default {
          content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
          ],
          theme: {
            extend: {
              fontFamily: {
                'aman': 'Open Sans'
              },
            },
          },
          plugins: [
            require('tailwindcss-plugins/pagination'),
          ],
        }


    </script>
