<div class="movie-form">
	<h1><i class="fas fa-film"></i> ADD MOVIE</h1>
	<form action="" method="" id="main-form">
		<div class="form-control">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" maxlength="255" placeholder="Enter name">
		</div>
		<div class="form-control">
			<label for="release-date">Release Date:</label>
			<input type="date" name="release-date" id="release-date" max="<?php echo date('Y-m-d'); ?>">
		</div>
		<div class="form-control">
			<label for="hours">Runtime:</label>
			<div class="form-group">
				<input type="number" name="hours" id="hours" min="1" max="24" placeholder="Hours">
				<input type="number" name="minutes" id="minutes" min="1" max="59" placeholder="Minutes">
			</div>
		</div>
		<div class="form-control">
			<label for="age-rating">Age Rating:</label>
			<ul>
				<li><input type="radio" name="age-rating" id="age-rating" value="PG-13" checked><span>PG-13</span></li>
				<li><input type="radio" name="age-rating" id="age-rating" value="G"><span>G</span></li>
				<li><input type="radio" name="age-rating" id="age-rating" value="PG"><span>PG</span></li>
				<li><input type="radio" name="age-rating" id="age-rating" value="R"><span>R</span></li>
				<li><input type="radio" name="age-rating" id="age-rating" value="NC-17"><span>NC-17</span></li>
			</ul>
		</div>
		<div class="form-control">
			<label for="genre">Genres:</label>
			<ul>
				<li><input type="checkbox" name="genre[]" id="genre" value="Action"><span>Action</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Adventure"><span>Adventure</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Animation"><span>Animation</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Biography"><span>Biography</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Comedy"><span>Comedy</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Crime"><span>Crime</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Drama"><span>Drama</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Family"><span>Family</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Fantasy"><span>Fantasy</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Film-Noir"><span>Film-Noir</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="History"><span>History</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Horror"><span>Horror</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Music"><span>Music</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Musical"><span>Musical</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Mystery"><span>Mystery</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Romance"><span>Romance</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Sci-Fi"><span>Sci-Fi</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Sport"><span>Sport</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Thriller"><span>Thriller</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="War"><span>War</span></li>
				<li><input type="checkbox" name="genre[]" id="genre" value="Western"><span>Western</span></li>
			</ul>
		</div>
		<div class="form-control">
			<label for="imdb-value">IMDb Value:</label>
			<input type="number" name="imdb-value" id="imdb-value" min="0.1" max="10.0" step="0.1" placeholder="Enter IMDb rating">
		</div>
		<div class="form-control">
			<label for="imdb-reviews">IMDb Reviews:</label>
			<input type="number" name="imdb-reviews" id="imdb-reviews" min="0" max="99999999999" step="1" placeholder="Enter IMDb review count">
		</div>
		<div class="form-control">
			<label for="tomatometer">Rotten Tomatoes:</label>
			<input type="number" name="tomatometer" id="tomatometer" min="0" max="100" step="1" placeholder="Enter Rotten Tomatoes rating">
		</div>
		<div class="form-control">
			<label for="audience-score">Audience Score:</label>
			<input type="number" name="audience-score" id="audience-score" min="0" max="100" step="1" placeholder="Enter Rotten Tomatoes audience score">
		</div>
		<div class="form-control">
			<label for="audience-reviews">Audience Reviews:</label>
			<input type="number" name="audience-reviews" id="audience-reviews" min="0" max="100" step="1" placeholder="Enter Rotten Tomatoes audience review count">
		</div>
		<div class="form-control">
			<label for="lifetime-gross">Lifetime Gross:</label>
			<input type="number" name="lifetime-gross" id="lifetime-gross" min="1" max="99999999999" step="1" placeholder="Enter lifetime gross">
		</div>
		<div class="form-control">
			<label for="directors">Directors:</label>
			<input type="text" name="directors" id="directors" maxlength="255" placeholder="Enter directors">
		</div>
		<div class="form-control">
			<label for="color">Color:</label>
			<input type="text" name="color" id="color" maxlength="7" placeholder="Enter hex color code">
		</div>
		<div class="form-control">
			<label for="trailer">Trailer Link:</label>
			<i style="color: red;">NOTE: Trailer link should be YouTube</i>
			<input type="url" name="trailer" id="trailer" pattern="https://.*" placeholder="Enter trailer link">
		</div>
		<div class="form-control">
			<label for="description">Description:</label>
			<textarea name="description" id="description" placeholder="Write movie description..." style="resize: none;"></textarea>
		</div>
		<div class="form-control">
			<label for="keywords">Keywords:</label>
			<textarea name="keywords" id="keywords" placeholder="Keywords for identifying..." style="resize: none;"></textarea>
		</div>
		<div class="form-control">
			<label></label>
			<button type="submit" name="add-movie" id="add-movie"><i class="far fa-save"></i> SAVE</button>
		</div>
	</form>
</div>
<div class="movie-form">
	<h1>IMAGES</h1>
	<form action="" method="" id="image-form" enctype="multipart/form-data">
		<div class="form-control">
			<label for="poster-image">Poster Image:</label>
			<input type="file" name="poster-image" id="poster-image" accept="image/jpeg">
		</div>
		<div class="form-control">
			<label for="cover-image">Cover Image:</label>
			<input type="file" name="cover-image" id="cover-image" accept="image/jpeg">
		</div>
		<div class="form-control">
			<label></label>
			<button type="submit" name="images" id="images"><i class="far fa-save"></i> SAVE</button>
		</div>
	</form>
</div>
<div class="movie-form">
	<h1>DOWNLOADS DETAILS</h1>
	<form action="" method="" id="">
		<div class="form-control">
			<label for="movie-id">Movie Name:</label>
			<input list="movie-names" name="movie-id" id="movie-id">
			<datalist id="movie-names">
				<option value="The Lord of the Rings: The Fellowship of the Ring" data-movie_id="1">
				<option value="The Lord of the Rings: The Two Towers"  data-movie_id="2">
				<option value="The Lord of the Rings: The Return of the King" data-movie_id="3">
			</datalist>
		</div>
		<div class="form-control">
			<label for="download-type">Download Type:</label>
			<select name="download-type" id="download-type">
				<option value="Torrent">Torrent</option>
				<option value="Direct">Direct</option>
			</select>
		</div>
		<div class="form-control">
			<label for="download-link">Download Link:</label>
			<input type="url" name="download-link" id="download-link" placeholder="Enter download link">
		</div>
		<div class="form-control">
			<label for="download-size">Download Size: (MB or GB)</label>
			<input type="number" name="download-size" id="download-size" min="1" max="1023" step="0.01" placeholder="Download size">
		</div>
		<div class="form-control">
			<label for="quality">Quality:</label>
			<ul>
				<li><input type="radio" name="quality" id="quality" value="HC HDRip" checked><span>HC HDRip</span></li>
				<li><input type="radio" name="quality" id="quality" value="DVDRip"><span>DVDRip</span></li>
				<li><input type="radio" name="quality" id="quality" value="HDRip"><span>HDRip</span></li>
				<li><input type="radio" name="quality" id="quality" value="WEBRip"><span>WEBRip</span></li>
				<li><input type="radio" name="quality" id="quality" value="BRRip"><span>BluRay</span></li>
				<li><input type="radio" name="quality" id="quality" value="3D"><span>3D</span></li>
			</ul>
		</div>
		<div class="form-control">
			<label for="resolution">Resolution:</label>
			<select name="resolution" id="resolution">
				<option value="1080p">2160p</option>
				<option value="1080p">1080p</option>
				<option value="720p">720p</option>
				<option value="480p">480p</option>
			</select>
		</div>
		<div class="form-control">
			<label></label>
			<button type="submit" name="downloads" id="downloads"><i class="far fa-save"></i> SAVE</button>
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$("#main-form").submit(function(event){
			event.preventDefault();
			var formData = $(this).serialize();

			$.ajax({
				url: "./movie/classes/Validation.php",
				method: "post",
				data: formData,
				dataType: "JSON",
				success: function(data) {
					if (data.errors != '') {
						for (var i = 0; i < data.errors.length; i++) {
							//console.log(data.errors[i]);
						}
					}
				}
			});
		});
		$("#image-form").submit(function(event){
			event.preventDefault();
			var posterImage = $("#poster-image")[0].files[0];
			console.log(posterImage.name);
		});
	});
	// https://stackoverflow.com/questions/23980733/jquery-ajax-file-upload-php
	// https://stackoverflow.com/questions/8436315/jquery-file-attributes
	// https://stackoverflow.com/questions/5255533/sending-an-array-to-php-from-javascript-jquery
</script>