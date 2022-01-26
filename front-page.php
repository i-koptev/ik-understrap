<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );
?>

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="<?php echo esc_attr( $container ); ?>">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
					<h1>Better Solutions For Your Business</h1>
					<h2>We are team of talented designers making websites with Bootstrap</h2>
					<div class="d-flex justify-content-center justify-content-lg-start">
						<a href="#about" class="btn-get-started scrollto">Get Started</a>
						<a href="https://youtu.be/6WFUv7-dmhE" class="glightbox btn-watch-video">
<!--							<i class="bi bi-play-circle"></i>-->
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								<path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
							</svg>
							<span>Watch Video</span></a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
					<img src="<?php echo get_template_directory_uri() . '/img/hero-img.png' ?>"
						 class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<div class="wrapper" id="index-wrapper">

		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="row">

				<!-- Do the left sidebar check and opens the primary div -->
				<!--			--><?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<main class="site-main" id="main">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic laborum modi nam, non quia quidem
						voluptas voluptatibus? Accusamus, aliquam animi aperiam architecto assumenda autem corporis
						culpa excepturi iste itaque iure nam, nisi officia reiciendis saepe sint veniam! Accusamus
						delectus, iste neque nostrum perspiciatis quia quod sit! A animi culpa dicta dignissimos,
						ducimus eveniet explicabo impedit itaque quo, repellat repellendus reprehenderit ullam
						voluptatem. Ipsum quia recusandae repudiandae. Aliquam aliquid culpa debitis enim nam neque
						odit, quae totam. Ad animi aperiam at atque, consequatur delectus deserunt doloribus earum
						eligendi excepturi explicabo facere id illo illum iste labore magnam maxime minima nihil, nobis
						quidem rem repellendus rerum sed voluptatum. A, nulla, repudiandae. Accusamus accusantium
						aliquid at consequuntur cumque eius enim eos eveniet in, ipsum labore laboriosam minima nostrum
						odio omnis, rem sit soluta, ut vero voluptatibus? Aliquid, at consequatur cumque debitis ipsum
						iusto minima nesciunt nostrum optio praesentium, quam temporibus, voluptas! A alias atque autem
						consequatur dolores doloribus eligendi harum illum ipsam modi nemo omnis quidem quo quod saepe,
						sit ullam. Amet autem cumque cupiditate eaque excepturi expedita facilis fugiat id inventore
						ipsam magnam molestiae nesciunt nulla odio odit optio porro provident quidem quis, quo rem
						veniam voluptatum. Assumenda aut consectetur consequatur cupiditate dolorum ea explicabo,
						incidunt iure labore molestiae mollitia nostrum quas quos repellat similique sunt vel!
						Aspernatur, at autem consectetur consequatur consequuntur deserunt dolorem doloribus dolorum
						eius eligendi est eum excepturi expedita harum illum incidunt itaque laudantium non nostrum
						placeat provident quaerat, quas quia quo quod ratione repellendus sequi sunt tempore temporibus
						veniam, veritatis voluptas voluptatem. A accusantium, aliquid at autem cumque delectus deleniti
						dicta dolor dolorem doloremque est et, eum excepturi facilis harum hic incidunt iure maiores
						nisi optio quas quo recusandae voluptate? Accusamus alias amet atque beatae consequatur cumque
						deserunt distinctio ducimus eligendi eum facere illum impedit ipsum iure laborum libero, minima
						natus necessitatibus officiis porro quisquam reiciendis sed soluta tempore temporibus unde
						voluptatibus. Amet, beatae culpa cumque ex explicabo iusto labore laborum maiores praesentium
						recusandae, sunt vitae voluptates voluptatibus! Ad alias aliquam aliquid amet blanditiis commodi
						consequatur consequuntur cum cumque doloremque eius eligendi error esse eveniet in, inventore
						itaque molestiae natus nihil nobis non pariatur praesentium quibusdam recusandae rerum sed sequi
						ut vero vitae voluptates. Amet asperiores autem cum debitis dignissimos distinctio dolore
						dolorum esse fugit hic illum, in inventore iure iusto laborum laudantium minus nemo, nobis non
						omnis porro quibusdam, quisquam quos rerum saepe sit sunt temporibus. Aspernatur atque,
						cupiditate deleniti dolorum, enim eum eveniet ex exercitationem, fugiat fugit in iure magnam nam
						nulla odio possimus quia repellendus totam vel veritatis? At, consectetur dolorem doloremque,
						doloribus error ex harum laboriosam, laudantium nihil placeat porro quaerat recusandae vero
						voluptatem voluptatibus! Blanditiis culpa deserunt dolore ea, illo laudantium minima perferendis
						repudiandae saepe velit! Aliquid autem explicabo illo nihil, placeat quia sed sequi. A ad
						assumenda at corporis deleniti dignissimos dolore dolores eligendi facilis hic inventore, iure
						necessitatibus neque, nihil odit pariatur quidem repellendus sed sunt velit vero voluptatem
						voluptatum? Ad architecto beatae esse eveniet hic libero magni, nulla quam quibusdam, reiciendis
						veniam voluptatem. Ab adipisci animi autem commodi delectus deleniti dicta distinctio dolore
						doloribus esse est et excepturi facere impedit, in ipsum labore laboriosam modi, molestias
						nesciunt nihil, perferendis qui recusandae repellat unde ut vitae voluptatem. Aliquid asperiores
						aut consectetur dignissimos eaque esse facilis fuga fugiat inventore ipsam iure iusto laborum,
						maxime molestias nemo nesciunt odio pariatur porro possimus quam quas qui quibusdam quidem quis
						quisquam quod reprehenderit repudiandae sapiente vel voluptas? Aspernatur dicta earum eius et,
						excepturi explicabo illo in magni molestiae necessitatibus numquam obcaecati perspiciatis quas
						qui quibusdam sapiente ut vitae, voluptatum. Atque aut delectus deserunt dignissimos dolorum
						enim eos harum iusto, laboriosam maiores modi possimus tempore. Aperiam deleniti exercitationem
						iure minus vero. Aspernatur at, error explicabo fugiat laborum magnam odio officia qui quod
						ratione sequi tempore? Accusamus accusantium animi assumenda doloremque ducimus eveniet
						quibusdam rem repellendus sapiente similique! Aliquam animi consectetur culpa dolores dolorum
						ducimus enim eum excepturi expedita inventore, neque nisi optio porro quaerat quam qui quo quod
						repellat saepe totam ullam, velit veniam vitae. Aspernatur commodi distinctio in maiores minus
						nisi officiis placeat reiciendis similique voluptate. Ab alias aliquam debitis eaque eligendi
						error explicabo fugiat in iure numquam obcaecati, quam quas, quasi quibusdam quod repellat,
						similique. Consequatur dolores impedit incidunt nulla odio ullam veritatis voluptas? Animi
						consectetur minima sed tempore vitae. Architecto cumque delectus dolores eos fugit nam vel
						voluptatem. Alias assumenda eligendi labore laudantium minus non reiciendis repellat sapiente.
						Ad aliquam aperiam aut debitis, dolorem, ea error inventore laborum, laudantium maiores quae
						quam qui recusandae vel voluptatem. Culpa doloribus illum iure natus neque nesciunt suscipit
						tenetur voluptatem. Accusamus alias at atque blanditiis culpa cupiditate debitis delectus dicta
						dignissimos distinctio doloribus error explicabo iusto minus mollitia necessitatibus neque nobis
						non nostrum obcaecati perferendis placeat quasi quia quo rem sapiente, ullam? Aliquam ea eos
						expedita explicabo magni, molestias numquam odit quas quisquam reiciendis, saepe similique
						suscipit totam ullam velit vitae voluptates! Aspernatur blanditiis consequatur, dicta eaque,
						eius eligendi impedit laborum nesciunt nostrum officia omnis reiciendis sint sunt. Autem
						deleniti ea ex expedita quas quos repudiandae ullam voluptate? Autem beatae dolorem eveniet id
						libero. Animi delectus earum ipsam non placeat quas, veniam. Ad animi at autem deleniti deserunt
						dolores excepturi fuga in ipsa laboriosam optio pariatur perferendis placeat quaerat, quam quas
						quia rem repudiandae sint suscipit tempore tenetur ullam ut voluptatibus voluptatum! Commodi
						numquam officiis perferendis sed. Accusamus aliquid assumenda at error minima perferendis
						repellat? Ad aliquam architecto aspernatur at blanditiis consequatur doloremque eos eveniet,
						illo in incidunt ipsam iusto nemo nihil odio odit perspiciatis quidem quisquam quo ratione sint
						tempora totam ullam velit veniam veritatis voluptatum. Dolores, nostrum quia! Adipisci aperiam
						beatae blanditiis culpa delectus dicta dolore doloribus ducimus est, eveniet hic illo iste
						laudantium libero, maiores minima molestias nulla pariatur porro quam quasi quia quis quisquam
						ratione vel! Ab asperiores cum, deleniti dolore ex facilis laboriosam libero natus,
						necessitatibus obcaecati officia pariatur, quasi qui sapiente suscipit tempore unde. Aliquid
						architecto consectetur impedit nostrum quam quibusdam rerum sapiente, voluptatibus voluptatum.
						Alias culpa dolore dolores esse fuga, in incidunt laboriosam magni maiores minus mollitia
						necessitatibus officia omnis perspiciatis quas quibusdam rem sed ut, veritatis voluptas!
						Adipisci, maxime, possimus. Asperiores, nemo, quibusdam! Autem excepturi facere nesciunt nulla
						porro possimus quia rem soluta veniam voluptatibus. Ab animi blanditiis consequatur deserunt
						fugit natus nobis perferendis ratione sequi tempore. Accusantium debitis deserunt dolorem
						excepturi incidunt minus necessitatibus numquam porro, provident quasi quod repudiandae,
						sapiente suscipit vitae voluptas voluptates voluptatibus. Ab aliquid amet assumenda aut
						cupiditate debitis eaque et impedit laboriosam laborum maiores maxime, minus nobis, nulla
						officia officiis pariatur, possimus repellendus tempore voluptates. Accusamus alias autem
						commodi, cumque cupiditate eligendi eos esse est fuga fugit impedit iusto, maiores minima minus
						modi nisi pariatur quae quaerat qui quisquam saepe temporibus ullam velit veniam voluptas
						voluptatem voluptates voluptatum? Aspernatur consectetur dolore expedita explicabo hic laborum
						natus quaerat tempore tenetur totam? Eveniet iusto laudantium odit sint velit! A accusamus
						accusantium debitis distinctio inventore minus nesciunt quis voluptate. Eius eligendi laborum
						molestiae quae. A ipsum laudantium, modi nisi odio quod! Asperiores doloremque harum sed sit. A
						accusamus accusantium aliquam animi aperiam asperiores at blanditiis cumque deleniti dolore
						eligendi error, est et id inventore ipsam iure laboriosam maxime molestiae, molestias mollitia
						natus neque nesciunt omnis optio quas, quibusdam quidem rem repellendus repudiandae sunt tempora
						ut vel veritatis vero voluptate voluptates. A accusantium consequuntur debitis delectus dicta
						dignissimos dolorem ea facilis harum id illum incidunt ipsam iure mollitia neque nihil nisi
						nobis non odio omnis optio perspiciatis, porro praesentium quaerat quam quas quis repellat saepe
						sed sit tempora unde vel vitae! Alias aliquid aperiam aspernatur dignissimos ducimus ea
						inventore labore laboriosam, laudantium molestiae nihil, numquam optio repudiandae vel,
						voluptates! Ab, doloremque fuga itaque molestiae molestias omnis quae quos temporibus velit
						voluptatibus! Aspernatur autem blanditiis delectus eos, error eveniet hic libero, nesciunt nisi,
						optio pariatur porro qui rem saepe sed sit tenetur ut. Aliquam at cupiditate delectus distinctio
						eos est harum hic, nesciunt nihil perspiciatis praesentium qui, quibusdam quisquam veniam
						voluptates? Ab ad amet blanditiis dignissimos exercitationem laudantium, minima quaerat quidem,
						quod temporibus, veniam voluptatem voluptatum. Amet error ex id itaque libero officiis optio
						porro provident reiciendis similique. Accusamus animi asperiores atque aut dolores esse ex
						excepturi iste iusto laboriosam, laborum maiores molestias necessitatibus officia placeat
						possimus praesentium quidem, quos ratione recusandae reiciendis saepe sint sit soluta voluptas.
						Accusantium adipisci aliquam atque deleniti deserunt dicta dolorem dolorum earum eius error et
						iste, labore laborum nam nihil officia quam quasi quo quos rerum sunt tempore temporibus tenetur
						veritatis voluptates. Eos labore mollitia quia repudiandae tempora! Blanditiis facere itaque
						officia perspiciatis possimus, praesentium quia unde. Cumque, inventore itaque maxime nemo odio
						possimus quis repellat similique. Ab accusamus adipisci, aliquam animi aperiam asperiores
						assumenda deserunt doloribus eaque earum eius enim excepturi fugit labore minima nisi
						perspiciatis provident quasi quos ratione rem sapiente, sed sequi similique soluta suscipit
						tenetur ullam ut vero vitae? Aliquam cupiditate error esse, et exercitationem expedita fugiat
						impedit labore officia pariatur perspiciatis quae quasi quia sed voluptas? Eos est magni
						necessitatibus! Commodi dolore id ipsam nostrum praesentium, quaerat quasi reiciendis sint unde
						voluptatum! A deserunt ea esse et eum incidunt, iusto natus odio perferendis quaerat repellat
						repellendus sit sunt vel, voluptatum. Animi, autem consectetur debitis dicta distinctio
						doloribus facilis harum modi numquam perferendis praesentium quos sit ut. Accusantium assumenda
						consectetur, consequatur deleniti dignissimos dolores eos est excepturi hic ipsa laborum, modi
						molestiae nemo nesciunt odit officia omnis perspiciatis possimus qui sequi unde vel veniam
						voluptatibus. Aut commodi culpa ducimus itaque iure nemo odio possimus. Corporis delectus fugiat
						incidunt inventore necessitatibus odit pariatur perferendis, possimus. Accusantium consequatur,
						cum esse est excepturi hic id, incidunt nobis officia officiis, rerum sapiente sed sit voluptate
						voluptatum. Animi architecto aspernatur assumenda autem cum debitis dignissimos dolor eveniet
						exercitationem facere hic ipsam magnam necessitatibus, praesentium quam quia sapiente!
						Accusantium asperiores consequatur culpa dicta error inventore nemo quia sequi vero. A ad
						assumenda dicta eaque est eveniet expedita hic in, iusto laborum magni nesciunt nihil nostrum
						pariatur quaerat sequi similique sint sunt tempora voluptate. Ab adipisci aliquam, aperiam
						assumenda debitis deserunt dolores error, eum facilis ipsum iusto nihil obcaecati odio
						perspiciatis, praesentium quibusdam quod quos recusandae reprehenderit sint. Assumenda eveniet
						explicabo praesentium quod! Alias aliquam amet aspernatur at aut, consectetur cupiditate
						delectus dignissimos distinctio doloribus, enim error ex expedita in ipsa iusto labore laborum
						maiores minus molestiae molestias mollitia nulla odio, pariatur placeat possimus quae quia
						quisquam temporibus totam. Accusamus animi at, consectetur cumque deserunt dolore dolorem
						doloremque doloribus eaque ipsum itaque iusto molestiae nam nemo, quis ullam voluptatem. Aliquam
						aliquid consectetur corporis cum debitis dolorum excepturi, expedita facere fugiat laboriosam
						magni maiores molestias natus nisi quam saepe suscipit voluptatibus. Autem, dolores illum itaque
						iusto nesciunt quia temporibus voluptatibus. A accusantium architecto commodi consequatur cumque
						distinctio ea earum eius enim incidunt iure mollitia nam, neque nihil, nisi nobis obcaecati
						omnis praesentium quae quia quidem quis recusandae reprehenderit rerum sapiente sed sequi
						temporibus tenetur veniam voluptatibus. Adipisci aliquam asperiores consectetur, consequuntur
						eaque eveniet exercitationem, fuga fugit in iure molestiae qui quod sequi temporibus tenetur.
						Commodi cumque deserunt eveniet soluta tempore. Ad aperiam aut consequatur delectus dolore
						dolorem esse eum, hic id magni numquam odit officia officiis optio pariatur perspiciatis porro
						quae, qui quidem quod veniam voluptas voluptatum! Accusantium beatae corporis doloribus nemo,
						officia quia quis! Accusantium aliquid corporis delectus enim nesciunt, nostrum quae quo
						recusandae saepe sit. Doloribus dolorum et quia quos temporibus. Ab aliquid aperiam asperiores
						at blanditiis dolorem doloribus ducimus, mollitia necessitatibus, nemo odio perspiciatis quo
						reiciendis sint veniam vero voluptatem. Ad aliquid asperiores blanditiis consequuntur deleniti
						deserunt dolorem doloremque dolores dolorum, earum eos esse eum eveniet expedita illo illum
						itaque labore laboriosam libero magni minima modi necessitatibus nobis non numquam obcaecati
						officia perspiciatis provident quam qui quibusdam quisquam repellendus repudiandae sed soluta
						ullam, voluptatum? A ab, atque beatae blanditiis cupiditate delectus dignissimos dolore, dolorem
						eligendi et eveniet expedita fuga fugiat hic illo iure maiores maxime minima modi necessitatibus
						nostrum odio officiis pariatur quisquam recusandae rem repellendus soluta suscipit tempora
						ullam? Amet deserunt eaque exercitationem illum impedit, maiores nostrum odit porro quos
						repellendus.</p>
				</main><!-- #main -->

				<!-- The pagination component -->
				<!--			--><?php //understrap_pagination(); ?>

				<!-- Do the right sidebar check -->
				<!--			--><?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

			</div><!-- .row -->

		</div><!-- #content -->

	</div><!-- #index-wrapper -->

<?php
get_footer();
