

@foreach($newspage as $news)
    <section class="news__page">
        <div class="container">
            <h3 class="news__page-title page__title">
                $news['title']
            </h3>
            <img class="news__page-img" src="images/img/news-image.jpg" alt="">
            <p class="news__page-date">
                $news['date']
            </p>
            <p class="news__page-text">
                $news['description']
            </p>
            {{-- <p class="news__page-text">
                Suspendisse porttitor elit morbi tincidunt pellentesque erat. Amet venenatis vel iaculis purus scelerisque tempus dignissim. Purus eu praesent magna etiam. Volutpat aliquam ut nibh pharetra non malesuada. Eu feugiat adipiscing placerat in fames arcu maecenas ullamcorper. Et aliquam scelerisque tincidunt nibh id. Iaculis senectus sit mauris eleifend. Aliquam ut consectetur volutpat ultricies etiam mauris cras sed congue. Massa nunc urna pharetra, egestas lobortis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id tincidunt leo tincidunt ipsum amet gravida ac, semper egestas. Sagittis sodales in sed amet, sapien vestibulum viverra vestibulum et. A non nibh pellentesque quam commodo, sed vel placerat. Lacus enim tellus eu elit quisque facilisis ut. Ullamcorper cursus nascetur non eu leo vitae. Suspendisse porttitor elit morbi tincidunt pellentesque erat. Amet venenatis vel iaculis purus scelerisque tempus dignissim. Purus eu praesent magna etiam. Volutpat aliquam ut nibh pharetra non malesuada. Eu feugiat adipiscing placerat in fames arcu maecenas ullamcorper. Et aliquam scelerisque tincidunt nibh id. Iaculis senectus sit mauris eleifend. Aliquam ut consectetur volutpat ultricies etiam mauris cras sed congue. Massa nunc urna pharetra, egestas lobortis.
            </p> --}}
        </div>
    </section>

@endforeach