<div class="footer-top">
	<div class="container">
		{hook h='displayFooterBefore'}
	</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      {hook h='displayFooter'}
    </div>
    <div class="row">
      {hook h='displayFooterAfter'}
    </div>
  </div>
</div>
<div class="bottom-footer">
	<div class="container">
	  <div class="col-md-12">
		<p>
			{l s='%copyright% %year% - %prestashop%' sprintf=['%prestashop%' => 'Takana Gaming Store', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme'}
		</p>
	  </div>
	</div>
</div>
<a href="#" id="goToTop" title="Back to top"> <i class="material-icons arrow-up">&#xE316;</i></a>