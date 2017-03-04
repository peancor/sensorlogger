<?php
script('sensorlogger', array(
	'script',
	'jquery.jqplot.min',
	'plugins/jqplot.dateAxisRenderer.min',
	'plugins/jqplot.canvasTextRenderer.min',
	'plugins/jqplot.canvasAxisTickRenderer.min',
	'plugins/jqplot.highlighter.min'
));
style('sensorlogger', 'style');
?>
<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('part.navigation')); ?>
		<?php print_unescaped($this->inc('part.settings')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('part.dashboard')); ?>
		</div>
	</div>
	<div id="app-sidebar" ng-class="" style="display: none;">
		<div class="content-wrapper">
			<div ng-controller="DetailsController" ng-click="" class="handler ng-scope">
				<div ng-show="" ng-class="" class="disabled">
					<div class="title" ng-class="{'editing':route.parameter=='name'}">
					</div>
					<div class="body" watch-top="" ng-style="{top:divTop}" style="top: 30px;">
						<div class="tpl_bodyDetails"></div>
					</div>
					<div class="footer">
						<a class="icon-delete handler close-all ng-hide" ng-click="" ng-show="">
							<span class="icon icon-delete"></span>
						</a>
						<a class="icon-close handler close-all">
							<span class="icon icon-close"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>