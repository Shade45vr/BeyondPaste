<?php

$title = "View Paste";

function show_page()
{
?>
	<div class="mt-3">
		<div class="row no-gutters">
			<div class="col-3">
				<h2>Title - #1234</h2>
			</div>

			<div class="col-5"></div>

			<div class="col-2 pr-2">
				<button type="button" class="btn btn-secondary btn-block" onclick="window.location='?page=view&raw'">
					<span class="pr-1">
						<img src="resources/external/octicons/img/grabber.svg" width=16 height=32 onerror="this.src='lib/octicons/grabber.png'">
					</span>
					RAW
				</button>
			</div>

			<div class="col-2 pl-2">
				<button type="button" class="btn btn-secondary btn-block" onclick="window.location='?page=new'">
					<span class="pr-1">
						<img src="resources/external/octicons/img/file.svg" width=16 height=32 onerror="this.src='lib/octicons/grabber.png'">
					</span>
					NEW PASTE
				</button>
			</div>
		</div>
	</div>
	<hr>
<?php
}