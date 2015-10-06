    <div class="container content-sm">
		 <?php print render($tabs); ?>
        <?php if (isset($page['content'])): ?>
            <div id="content-top">
                <?php print render($page['content']); ?>
            </div>
        <?php endif; ?>
    	
    </div><!--/container-->