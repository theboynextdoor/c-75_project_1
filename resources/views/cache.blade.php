<!DOCTYPE html>
<html>
    <body>
        <script type="text/javascript" src="/js/modernizr.js"></script>
        <script type="text/javascript" src="/js/CacheError.js"></script>
        <script type="text/javascript" src="/js/cache.js"></script>
        <script type="text/javascript" src="/js/quandl.js"></script>
        <script>
            Quandl.init({cache: Cache});
            Quandl.fetch('AAPL', console.log);
        </script>
    </body>
</html>