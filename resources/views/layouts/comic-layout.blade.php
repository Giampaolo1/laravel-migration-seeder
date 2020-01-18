<?php // layout del sito ?>

<?php // ---------------------------- ?>
<?php // sara' quello che estenderemo ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php // INCLUDE-------------------- ?>
    {{-- @include("components.header") --}}
    @yield('content')
  </body>
</html>
