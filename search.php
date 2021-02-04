<?php get_header(); ?>
<div class="funnelback"><br />
<div class="main_content" id="search-container">
    <div class="fb-background" id="search-header">
            <div class="container"><br>
                <form id="search-form" method="GET" class="course-search-form__form">
                    <div class="row">
                        <div class="col-sm-9">
                            <label for="fb-search-input" class="wave_text">Search this site..</label>
                            <input type="text" id="fb-search-input" class="form-control input-lg de-funnelback-search-input form-control-lg query tt-input" placeholder="Search This Site" autocomplete="off" name="query" value="" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" id="searchFormSubmit" class="btn btn-warning btn-lg text-center center-block btn-block">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
			<div class="tabs container" id="search-result-container">
			</div>
			<?php include 'inc/data-alert.php'; ?>
    </div>
</div><br /><br />
</div>
<script src="<?php echo get_template_directory_uri(); ?>/funnelback/funnelback.search.js"></script>
<?php get_footer(); ?>