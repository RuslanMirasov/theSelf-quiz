<input type="hidden" name="referer" value="<? echo $_SERVER['HTTP_REFERER']; ?>">
<input type="hidden" name="ref_url" value="<? echo $_SERVER['QUERY_STRING']; ?>">
<input type="hidden" name="root" class="root" value="<?php echo $assets; ?>">

<!--add scripts-->
<script src="<?php echo $assets; ?>js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $assets; ?>js/jquery.maskedinput.min.js"></script>
<script src="<?php echo $assets; ?>js/scripts.js"></script>
<script src="<?php echo $assets; ?>js/popup.js"></script>
<script src="<?php echo $assets; ?>js/sendmail.js"></script>

</body>

</html>