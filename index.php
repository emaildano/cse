<script>
  (function() {
    var cx = '013378122081220310143:enacpzntdem';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<h3>Google Searchbox Element</h3>
<gcse:searchbox-only resultsUrl="/results.php"></gcse:searchbox-only>

<h3>Basic Form Element</h3>
<form action="/results.php" method="get">
  <input type="text" name="q"><br>
  <input type="submit" value="Submit">
</form>
