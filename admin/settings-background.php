<table class="wpsc-settings-table" width="100%">
	<tbody>
	<tr>
		<td valign="top">
			<form name="wp_manager" action="https://www.testkolik.com/wp-admin/options-general.php?page=wpsupercache&amp;tab=easy" method="post">
				<input type="hidden" name="action" value="easysetup"><input type="hidden" id="_wpnonce" name="_wpnonce" value="cb12362bf7"><input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php?page=wpsupercache">
				<table class="form-table">
					<tbody>
					<tr valign="top">
						<th scope="row"><label for="wp_cache_status">Önbellekleme</label></th>
						<td>
							<fieldset>
								<label><input type="radio" name="wp_cache_easy_on" value="1" checked="checked">Önbellekleme Açık
									<em>(Önerilen)</em></label><br>
								<label><input type="radio" name="wp_cache_easy_on" value="0">Önbellekleme Kapalı</label><br>
							</fieldset>
						</td>
					</tr>
					</tbody>
				</table>
				<p>The following recommended settings will be enabled:</p>
				<ol>
					<li>Caching disabled for logged in visitors.</li>
					<li>Simple caching.</li>
					<li>Cache Rebuild.</li>
					<li>Interval garbage collection every 10 minutes with a cache lifetime of 30 minutes (if not configured already).</li>
				</ol>
				<p>These settings can be modified on the Advanced Settings page.</p>
				<div class="submit"><input class="button-primary" type="submit" value="Durumu Güncelle"></div>
			</form>
			<h4>Önbellek Testi</h4>
			<p>Önbelleklenmiş sitenizi aşağıdaki test düğmesine basarak sınayın.</p>
			<p>Note: if you use Cloudflare or other transparent front-end proxy service this test may fail.</p>
			<ol>
				<li> If you have Cloudflare minification enabled this plugin may detect differences in the pages and report an error.</li>
				<li> Try using the development mode of Cloudflare to perform the test. You can disable development mode afterwards if the test succeeds.</li>
			</ol>
			<p></p>
			<form name="cache_tester" action="https://www.testkolik.com/wp-admin/options-general.php?page=wpsupercache&amp;tab=easy" method="post">
				<input type="hidden" name="action" value="test"><input type="checkbox" name="httponly" checked="checked" value="1"> Güvenliksiz (https'siz) anasayfa sorgusu gönder
				<div class="submit">
					<input class="button-secondary" type="submit" name="test" value="Önbelleği Test Et"></div>
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="cb12362bf7"><input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php?page=wpsupercache">
			</form>
			<h4>Önbelleğe Alınan Sayfaları Sil</h4>
			<p>Cached pages are stored on your server as html and PHP files. If you need to delete them, use the button below.</p>
			<form name="wp_cache_content_delete" action="https://www.testkolik.com/wp-admin/options-general.php?page=wpsupercache&amp;tab=contents" method="post">
				<input type="hidden" name="wp_delete_cache">
				<div class="submit">
					<input id="deletepost" class="button-secondary" type="submit" value="Önbelleği Temizle "></div>
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="cb12362bf7"><input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php?page=wpsupercache">
			</form>
			<h4 class="clear">Tavsiye Edilen Bağlantılar ve Eklentiler</h4>
			<p>Önbellekleme, bir siteyi hızlandırmak için atılan adımlardan yalnızca bir tanesidir. Sitenizi hızlandırmaya yardımcı olacak başka eklentiler de mevcuttur:</p>
			<ul style="list-style: square; margin-left: 2em;">
				<li>
					<a href="https://jetpack.com/redirect/?source=jitm-wpsc-recommended">Jetpack</a> provides everything you need to build a successful WordPress website including an image/photo CDN (free) and a video hosting service (paid).
				</li>
				<li>
					<a href="http://yslow.org/">Yahoo! Yslow</a> analyzes web pages and suggests ways to improve their performance based on a set of rules for high performance web pages. Also try the performance tools online at
					<a href="https://gtmetrix.com/">GTMetrix</a>.
				</li>
				<li>
					<a href="https://wordpress.org/plugins/use-google-libraries/">Use Google Libraries</a> allows you to load some commonly used Javascript libraries from Google webservers. Ironically, it may reduce your Yslow score.
				</li>
				<li><strong>Yalnızca ileri düzey kullanıcılar için:</strong> Bir obje önbellekleme yöntemi kullanın.
					<a href="https://wordpress.org/plugins/memcached/">Memcached</a>,
					<a href="https://neosmart.net/WP/XCache/">XCache</a>,
					<a href="https://neosmart.net/WP/eAccelerator/">eAcccelerator</a> ve benzeri örnekler mevcuttur.
				</li>
				<li>
					<a href="https://wordpress.org/plugins/wp-crontrol/">WP Crontrol</a> is a useful plugin to use when trying to debug garbage collection and preload problems.
				</li>
			</ul>
		
		</td>
		<td valign="top" style="width: 300px">
			<div style="background: #ffc; border: 1px solid #333; margin: 2px; padding: 3px 15px">
				<h4>Other Site Tools</h4>
				<ul style="list-style: square; margin-left: 2em;">
					<li>
						<a href="https://jetpack.com/redirect/?source=jitm-wpsc-generic">Speed up images and photos (free)</a>
					</li>
					<li>
						<a href="https://jetpack.com/redirect/?source=jitm-wpsc-premium">Fast video hosting (paid)</a>
					</li>
					<li><a href="https://crowdsignal.com/pricing/?ad=wpsc">Add Surveys and Polls to your site</a>
					</li>
				</ul>
				<h4>Yardıma mı İhtiyacınız Var?</h4>
				<ol>
					<li>Use the
						<a href="https://www.testkolik.com/wp-admin/options-general.php?page=wpsupercache&amp;tab=debug">Debug tab</a> for diagnostics.
					</li>
					<li>Check out the
						<a href="https://wordpress.org/support/plugin/wp-super-cache">support forum</a> and
						<a href="https://wordpress.org/plugins/wp-super-cache/#faq">FAQ</a>.
					</li>
					<li>Visit the <a href="https://wordpress.org/plugins/wp-super-cache/">plugin homepage</a>.</li>
					<li>Try out the
						<a href="https://odd.blog/y/2o">development version</a> for the latest fixes (<a href="https://plugins.trac.wordpress.org/log/wp-super-cache/">changelog</a>).
					</li>
				</ol>
				<h4>Rate This Plugin</h4>
				<p>Please
					<a href="https://wordpress.org/support/plugin/wp-super-cache/reviews?rate=5#new-post">rate us</a> and give feedback.
				</p>
			
			</div>
		</td>
	</tr>
	</tbody>
</table>