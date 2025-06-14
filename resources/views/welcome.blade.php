@extends('layout.app')
@section('content')

<div class=" banner-area">
    <div class="overlay"></div>
    <!-- start page banner -->
    <div class="">
        <!-- start container -->
        <div class="container bannner-content">
            <h1>CHIEF (HON) SIR SYLVESTER ANYARUE CHUKWUMA EZEOKENWA, KSJI (EZEUDO UMUCHU; ICHIE EZENWATA) </h1>
            <p class="date" style="margin-top: 10px !important; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <span style="display: flex; align-items: center; gap: 5px;"> <i class="fa fa-star" style="color: #fff; font-size: 10px !important;"></i>June 26, 1954</span>
                <span>-</span>
                <span style="display: flex; align-items: center; gap: 5px;"><i class="fa fa-cross" style="color: #fff; font-size: 10px !important;"></i> May 15, 2025</span>
            </p>
        </div>
        <!-- end container -->
    </div>
    <!-- end page banner -->
</div>

<!-- Toast Notification Container -->
<div id="toastContainer" style="position: fixed; top: 50px; right: 50px; z-index: 9999; width: auto;"></div>

<div class="welcome-message-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="welcome-message-box">
                    <div class="section-header text-center">
                        <h2 class="section-title">A Heartfelt Welcome</h2>
                        <div class="divider">
                            <span class="line"></span>
                            <span class="icon"><i class="fa fa-heart"></i></span>
                            <span class="line"></span>
                        </div>
                    </div>

                    <div class="welcome-content">
                        <p class="lead">I welcome you to this platform dedicated to the life and legacy of my dear father, <strong>Chief Sir Sylvester Ezeokenwa, Ezeudo Umuchu</strong>.</p>

                        <p>It is with a heavy heart that I share this space with you, as we celebrate his life, mourn his passing, and seek to keep his memory alive.</p>

                        <blockquote class="memorial-quote">
                            <p>"My father was a man of great vision, integrity, and compassion. He dedicated his life to serving others, and his legacy continues to inspire us all."</p>
                        </blockquote>

                        <p>Through this platform, we hope to share his story, his achievements, and his profound impact on our community and beyond. I invite you to join us in celebrating his life, sharing your memories, and paying your respects.</p>

                        <p>May his legacy continue to inspire us all, and may we strive to carry on his work in our own ways.</p>

                        <div class="closing-message">
                            <p>Thank you for visiting, and may God comfort us all during this difficult time.</p>
                            <p class="signature">— <strong>Chief Barr. Sly Ezeokenwa</strong> <br> (Son) <br> National Chairman, APGA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main" role="main">
    <div id="content" class="content main-content">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <div class="col-md-5 sticky-col ">
                    <div class="heraldic-design">
                        <div class="portrait-frame">
                            <img src="{{ asset('assets/images/img2.jpg') }}" alt="Portrait of Ezeudo Umuchu">
                            <div class="crest-ornament">
                                Ezeudo Umuchu
                            </div>
                        </div>

                        <div class="heraldic-title">
                            <div class="scroll-decoration">
                                <h1>Chief (Hon) Sir. Sylvester Anyarue Chukwuma Ezeokenwa</h1>
                            </div>
                            <!-- <div class="title-plaque">
                                <span>Ezeudo Umuchu (KSJI)</span>
                            </div> -->
                            <div class="lifespan" style="text-align: center;">
                                <span class="icon">⌛</span>
                                <span> June 26, 1954 - May 15, 2025</span>
                            </div>
                        </div>

                        <blockquote class="royal-quote">
                            <div class="quote-icon">"</div>
                            <p>Peace is not absence of conflict, but the ability to handle conflict by peaceful means
                            </p>
                            <footer>- Ronald Reagan</footer>
                        </blockquote>
                    </div>


                </div>


                <div class="col-md-7">
                    <ul class="nav nav-tabs obituary-info-tabs" role="tablist">
                        <li
                            class="{{ request()->has('tab') && request()->get('tab') == 'condolences' ? '' : 'active' }}">
                            <a href="#Obituary" aria-controls="Obituary" role="tab" data-toggle="tab">Biography</a>
                        </li>
                        <li class="">
                            <a href="#funeralProgram" aria-controls="funeralProgram" role="tab"
                                data-toggle="tab">Funeral Program
                            </a>
                        </li>
                        <li
                            class="{{ request()->has('tab') && request()->get('tab') == 'condolences' ? 'active' : '' }}">
                            <a href="#condolences" aria-controls="Condolences" role="tab"
                                data-toggle="tab">Condolences</a>
                        </li>
                        <li class="">
                            <a href="#eulogy" aria-controls="eulogy" role="tab"
                                data-toggle="tab">Eulogy
                            </a>
                        </li>
                        <li class="">
                            <a href="#contact" aria-controls="contact" role="tab"
                                data-toggle="tab">Contact
                            </a>
                        </li>
                        <li>
                            <a href="#photographs" aria-controls="Photographs" role="tab"
                                data-toggle="tab">Photographs
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content obituary-info-tabs-content">
                        <div role="tabpanel" class="tab-pane {{ request()->has('tab') && request()->get('tab') == 'condolences' ? '' : 'active' }}" id="Obituary">

                            <div class="post-content">
                                <div class="tribute-header">
                                    <h1>EZEUDO UMUCHU'S TIMELESS LEGACY OF WISDOM AND INFLUENCE</h1>
                                    <!-- <p class="author">By Dr. Tony Olisa Mbeki</p> -->
                                </div>

                                <div class="intro-quote">
                                    <blockquote>
                                        <p>"Great men are not born great, they grow great."</p>
                                        <footer>— Mario Puzo</footer>
                                    </blockquote>
                                </div>

                                <div class="tribute-body">
                                    <p>Chief Sir Sylvester Anyarue Chukwuma Ezeokenwa, KSJI (Ezeudo Umuchu: Ichie Ezenwata), was one such
                                        man. Some 70 years ago, he was born. On Thursday, May 15, 2025, he slipped away
                                        quietly—just as he lived—leaving behind footprints too deliberate to be erased.
                                    </p>

                                    <h2>A Noble Foundation</h2>
                                    <p>Born into the noble lineage of Late Ezennanya Ezeokenwa Ezeanyim of Umumilo
                                        Village, Amanasaa, Umuchu, his foundation was deep and dignified. His mother,
                                        Late Catherine Egbeichi, a yam merchant in Nkwo Uchu, taught him resilience
                                        through her grit and industry. From his father, he inherited the kind of dignity
                                        Ralph Waldo Emerson called <em>"the only thing that never fades."</em></p>

                                    <h2>Education and Sacrifice</h2>
                                    <p>His academic path began at Ogbarimgba Primary School, continued at Central School
                                        Umuchu, and culminated at St. Peter's School, Achina, where he distinguished
                                        himself in the WASC exams. Yet, when duty called, he answered—not for himself
                                        but for his family. Forfeiting admission into Alvan Ikoku College of Education,
                                        he chose to pave the way for his younger siblings. As Lincoln said, <em>"The
                                            best way to predict your future is to create it"</em>—and he did so, through
                                        sacrifice.</p>

                                    <h2>The Visionary Entrepreneur</h2>
                                    <p>In business, he was a visionary. From the cobblestones of Paris to Germany's
                                        industrial cities, London's markets, and Italy's elegance, he left Umuchu to
                                        plant his dreams across continents. But this wasn't mere travel—it was purpose.
                                        He eventually established a strong footing in Nigeria's oil and gas sector,
                                        nurturing it with unwavering discipline and determination. One could imagine
                                        Thomas Edison seeing in him a kindred spirit, for as Edison once said,
                                        <em>"Genius is one percent inspiration and ninety-nine percent
                                            perspiration."</em>
                                    </p>

                                    <h2>The Reluctant Statesman</h2>
                                    <p>Politics didn't tempt him—it summoned him. In the 1980s, he served as a
                                        Councillor in Onitsha Local Government under the Social Democratic Party (SDP).
                                        He was among the foundational architects of the PDP in Anambra and helped secure
                                        its 1999 victory. When governance derailed, he co-pioneered the Anambra People's
                                        Forum (APF)—a moral response to political decay, echoing Edmund Burke's timeless
                                        warning: <em>"The only thing necessary for the triumph of evil is for good men
                                            to do nothing."</em></p>

                                    <h2>Architect of APGA</h2>
                                    <p>Then came a dream of an Igbo political identity. Not surprisingly, he was there,
                                        sketching the blueprints of what would become the All Progressives Grand
                                        Alliance (APGA). For thirteen faithful years, he served as Chairman of APGA in
                                        Onitsha South, wielding influence not with noise, but with native wisdom and
                                        strategic foresight. He didn't shout, but he was heard. He led with wisdom,
                                        proving Lao Tzu right: <em>"A leader is best when people barely know he
                                            exists."</em></p>

                                    <h2>Ezeudo: The King of Peace</h2>
                                    <p>In December 2014, his people crowned him <strong>Ezeudo—King of Peace</strong>.
                                        It was not just a title; it was recognition. He had chaired Amanasaa Community
                                        and guided the Umuchu Improvement Union through delicate times. He brought order
                                        where there was chaos, structure where there was drift. His voice, though
                                        gentle, was final. <em>"Peace,"</em> Ronald Reagan said, <em>"is not absence of
                                            conflict, but the ability to handle conflict by peaceful means."</em> Ezeudo
                                        embodied that.</p>

                                    <h2>Faith and Service</h2>
                                    <p>His devotion to the Church was no less fervent. He helped build St. Matthew's and
                                        SS Peter & Paul Catholic Churches, led the Bazaar Committee, and served as
                                        Second Vice Chairman of the Parish Pastoral Council. His faith, like C.S. Lewis
                                        described, was not a feeling but a choice—quiet, steady, and sure.</p>

                                    <h2>The Living Legacy</h2>
                                    <p>But perhaps his most enduring legacy is not in brick or title, but in character
                                        passed down. He raised a son, Barrister Sly Ezeokenwa Jnr, APGA's National
                                        Chairman. A son whose moral clarity and political astuteness reflect the
                                        father's tutelage. In him, the virtues of Ezeudo—humility, loyalty, courage,
                                        patience, discipline—live on.</p>

                                    <p>With his wife, Lady Emilia Ezeokenwa, he built a strong family of five children,
                                        nineteen grandchildren, and a legacy destined to outlive memory.</p>

                                    <div class="closing-quote">
                                        <blockquote>
                                            <footer>— Victor Hugo once said...</footer>
                                            <p>"To be a saint is to be an exception; to be a great man is to be a rule."
                                                <span>Chief Sir Sylvester Ezeokenwa was both.</span>
                                            </p>

                                        </blockquote>
                                    </div>

                                    <p class="final-paragraph">His life was a quiet proverb, his death a solemn pause.
                                        And even now, though the pillar has fallen, the foundation still holds.</p>

                                    <p class="signature">As Maya Angelou reminded us, <em>"Nothing can dim the light
                                            that shines from within."</em> Ezeudo's light still shines—quietly, wisely,
                                        eternally.</p>
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane " id="funeralProgram">
                            <div class="eulogy-container">
                                <div class="memorial-header">
                                    <div class="gold-bar"></div>
                                    <h1 class="text-center">Funeral Service Schedule</span></h1>
                                    <div class="gold-bar"></div>
                                </div>

                                <div class="funeral-content">
                                    <div class="program-section">

                                        <div class="schedule-day">
                                            <h3> 🗓️ Saturday 12th July 2025</h3>
                                            <ul>
                                                <li>
                                                    <p class="time">
                                                        5:00pm
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Christian Wake Keep and Service of Songs at his Residence, Housing Estate, Fegge Onitsha
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="schedule-day">
                                            <h3> 🗓️ Thursday 17th July 2025</h3>
                                            <ul>
                                                <li>
                                                    <p class="time">
                                                        1:00pm
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Valedictory Session at Onitsha South LGA Secretariat, Woliwo Onitsha
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        3:00pm
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Body arrives Temple of the Knights of St. John International, St. Jude Commandery for Cancellation Exercise
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        4:00pm
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Brief Stop Over at APGA Onitsha South LGA Secretariat, along Miss Elems Street, Fegge Onitsha
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="schedule-day">
                                            <h3> 🗓️ Friday 18th July 2025</h3>
                                            <ul>
                                                <li>
                                                    <p class="time">
                                                        10am
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Requiem Mass at Immaculate Heart Catholic Parish, along Ziks Avenue, Fegge Onitsha.
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        12:00noon
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Body departs Immaculate Heart Parish, Fegge Onitsha to Umuchu
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        2:00pm
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Body arrives Umuchu Civic Centre, Umuchu for a Valedictory Session by the Umuchu Improvement Union Representative Assembly (UIURA)
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        4:00pm
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Vigil Mass at SS. Peter & Paul Catholic Parish, Amanasaa Umuchu in Aguata LGA
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="schedule-day">
                                            <h3> 🗓️ Saturday 19th July 2025</h3>
                                            <ul>
                                                <li>
                                                    <p class="time">
                                                        8:00am
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Body arrives Ezeudo Umuchu's compound for lying-in-state
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        10:00am
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Funeral Mass at Holy Name Parish, Umuchu in Aguata LGA
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        After Mass
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Interment follows immediately at his compound
                                                    </span>
                                                </li>
                                                <li>
                                                    <p class="time">
                                                        After Interment
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Reception and Condolences at Umuchu Main Market Complex, Umuchu in Aguata LGA
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="schedule-day">
                                            <h3> 🗓️ Sunday 20th July 2025</h3>
                                            <ul>
                                                <li>
                                                    <p class="time">
                                                        9:00am
                                                    </p>
                                                    <span style="margin: 0 5px; color: #8e7037;" class="arrow">→</span>
                                                    <span class="info">
                                                        Thanksgiving Mass at SS. Peter & Paul Parish, Amanasaa Umuchu
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="prayer-close">
                                            <p class="text-center"><em>May his gentle soul rest in peace - Amen</em></p>
                                            <p class="text-right program-sign"><span>Signed:</span><br>
                                                Barr. Sly Ezeokenwa<br>
                                                National Chairman APGA (SON)<br>
                                                For the Family
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane {{ request()->has('tab') && request()->get('tab') == 'condolences' ? 'active' : '' }}" id="condolences">
                            @if(session('success') || session('error'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    showToast('{{ session("success") ? "success" : "error" }}',
                                        '{{ session("success") ? session("success") : session("error") }}');
                                });
                            </script>
                            @endif

                            <div class="post-comments">
                                <div id="comments">
                                    <h3>Condolences ({{ $condolences->total() }})</h3>
                                    <ol class="comments">
                                        @foreach($condolences as $condolence)
                                        <li>
                                            <div class="post-comment-block">
                                                <img class="img-thumbnail"
                                                    src="assets/images/9f0f9035c0f4f96989ca04335332678f.png" alt="">
                                                <div class="post-comment-content">
                                                    <h5>{{ $condolence->fullName }} says</h5>
                                                    <span
                                                        class="meta-data">{{ $condolence->created_at->format('F d, Y') }}</span>
                                                    <div class="summernote-content">{!! $condolence->tribute !!}</div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ol>

                                    <!-- Pagination Links -->
                                    <div class="mt-3">
                                        {{ $condolences->appends(['tab' => 'condolences'])->links() }}
                                    </div>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h3>Leave a Condolence</h3>
                                <form id="condolenceForm" method="POST" action="{{ route('tribute.store') }}">
                                    @csrf
                                    <textarea class="form-control" id="summernote" placeholder="Your message"
                                        name="tribute" required></textarea>
                                    <div class="char-counter"> <!-- Changed from word-counter -->
                                        <span class="char-count">0</span>/2000 characters <!-- Changed from word-count -->
                                        <span class="char-count-error text-danger" style="display: none;">Not more than 2000 characters!</span> <!-- Changed from word-count-error -->
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <input name="fullName" type="text" placeholder="Your name"
                                                class="form-control input-lg" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="email" type="email" placeholder="Your email (Optional)"
                                                class="form-control input-lg">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg mt-3" onclick="showModal()">Save
                                        Condolence</button>
                                </form>

                            </div>
                        </div>




                        <div role="tabpanel" class="tab-pane " id="eulogy">
                            <div class="eulogy-container">
                                <div class="memorial-header">
                                    <div class="gold-bar"></div>
                                    <h1 class="text-center">Eulogy for Chief Sir Sylvester Ezeokenwa Ezeudo Umuchu</span></h1>
                                    <div class="gold-bar"></div>
                                </div>

                                <div class="eulogy-content">

                                    <div class="eulogy-text">

                                        <div class="legacy-section">
                                            <p>As we stand in solidarity, united in our grief and in celebration of a life that touched countless hearts – Chief Sir Sylvester Ezeokenwa, Ezeudo Umuchu. A stalwart of Nigerian politics, a community leader and a shining example of leadership, integrity, and service.</p>
                                        </div>

                                        <div class="legacy-section">
                                            <p>Chief Ezeokenwa's legacy is etched in the annals of our nation's history. As the first Chairman of the All Progressives Grand Alliance (APGA) in Onitsha South Local Government Area (2003-2015), he played a pivotal role in shaping the party's destiny and laid the foundation for the party's enduring success in the local governmnet. His leadership vision, dedication, and unwavering commitment to the party's ideals paved the way for APGA's continued governance in the state since 2006.</p>
                                        </div>

                                        <div class="legacy-section">
                                            <p>Beyond politics, Chief Ezeokenwa's impact in umuchu was profound. As President-General of the Umuchu Community, he worked tirelessly to promote unity, progress, and development. His selflessness, wisdom, and compassion earned him the respect and admiration of all who knew him.</p>
                                        </div>

                                        <div class="legacy-section">
                                            <p>As a devout Catholic Christian and Knight of St. John International, Chief Ezeokenwa's faith was the bedrock of his actions. His kindness, generosity, and humility inspired countless individuals, and his legacy continues to be a beacon of hope for Umuchu Chirstian community.</p>
                                        </div>

                                        <div class="legacy-section">
                                            <p>As a father, Chief Ezeokenwa's pride and joy was his children. One of them, Barr. Sly Ezeokenwa, the current National Chairman of APGA. He instilled in children the values of hard work, integrity, and service to others, and his legacy lives on through them.</p>
                                        </div>


                                        <div class="legacy-section">
                                            <p>Chief Ezeokenwa's passing is a significant loss to our nation's democratic journey. His contributions to the growth of APGA and his commitment to public service will be deeply missed. Yet, his legacy endures, inspiring future generations to emulate his example.</p>
                                        </div>


                                        <div class="signature-block">
                                            <p class="final-line">Jee nke oma Ezeudo Umuchu.</p>
                                            <div class="signature-line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane " id="contact">
                            <div class="eulogy-container">
                                <div class="memorial-header">
                                    <div class="gold-bar"></div>
                                    <h1 class="text-center">Contact Us</span></h1>
                                    <div class="gold-bar"></div>
                                </div>



                                <div class=" contact-row row justify-content-center align-items-center">
                                    <div class="col-md-12">
                                        <p>For all inquiries related to the burial proceedings, kindly contact the committee chairman whose details are provided below</p>
                                        <div class="spacer-45"></div>
                                        <!-- start contact us -->
                                        <div class="contact-us">
                                            <!-- start row -->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="icon-box ibox-secondary ibox-outline ">
                                                        <div class="ibox-icon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                        <h3>Name</h3>
                                                        <address>Dr. Chibueze Ofobuike (Mayor, Aguata LGA) </address>
                                                        <p> <i class="fa fa-phone" style="color: #8B0000; background: #fff !important;"></i> <span>08063306798</span></p>
                                                        <span>Burial Planning Commitee Chairman</span>

                                                    </div>
                                                </div>

                                                <!-- <div class="col-md-4 col-sm-6">
                                                    <div class="icon-box ibox-secondary ibox-outline">
                                                        <div class="ibox-icon">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <h3>PHONE</h3>
                                                        <span>08063306798</span>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end contact us -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-wrapper">
                                            <p class="margin-35">Feel free to contact us if you have any further questions.</p>
                                            <form method="POST" id="contact-form" class="contact-form clearfix" action="{{ route('contact.send') }}">
                                                @csrf

                                                <label for="name">Your Name (required)</label>
                                                <input name="contactName" type="text" id="name" class="form-control" placeholder="your name">
                                                <label for="email">Your Email (required)</label>
                                                <input name="contactEmail" type="text" id="email" class="form-control" placeholder="name@example.com">

                                                <label for="message">Your Message</label>
                                                <textarea cols="2" rows="2" id="contactUsMessage" name="contactMessage" placeholder="Leave your message here" class="form-control"></textarea>

                                                <button type="button" class="btn btn-primary btn-lg mt-3" onclick="showContactModal()">Send
                                                    Message</button>
                                            </form>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div role="tabpanel" class="tab-pane" id="photographs">
                            <ul class="row format-gallery obituary-photographs">
                                <li class="grid-item format-image col-md-4 col-sm-6 col-xs-6">
                                    <a href="{{ asset('assets/images/img2.jpg') }}"
                                        class="media-box popup-image">
                                        <img src="{{ asset('assets/images/img2.jpg') }}" class="gallery-img" alt="">
                                        <span class="zoom"><span class="icon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li class="grid-item format-image col-md-4 col-sm-6 col-xs-6">
                                    <a href="{{ asset('assets/images/img1.jpeg') }}"
                                        class="media-box popup-image">
                                        <img src="{{ asset('assets/images/img1.jpeg') }}" class="gallery-img" alt="">
                                        <span class="zoom"><span class="icon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </span>
                                    </a>
                                </li>


                                <li class="grid-item format-image col-md-4 col-sm-6 col-xs-6">
                                    <a href="{{ asset('assets/images/profile1.jpeg') }}"
                                        class="media-box popup-image">
                                        <img src="{{ asset('assets/images/profile1.jpeg') }}" class="gallery-img" alt="">
                                        <span class="zoom"><span class="icon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </span>
                                    </a>
                                </li>


                                <li class="grid-item format-image col-md-4 col-sm-6 col-xs-6">
                                    <a href="{{ asset('assets/images/img3.jpg') }}"
                                        class="media-box popup-image">
                                        <img src="{{ asset('assets/images/img3.jpg') }}" class="gallery-img" alt="">
                                        <span class="zoom"><span class="icon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li class="grid-item format-image col-md-4 col-sm-6 col-xs-6">
                                    <a href="{{ asset('assets/images/img4.jpg') }}"
                                        class="media-box popup-image">
                                        <img src="{{ asset('assets/images/img4.jpg') }}" class="gallery-img" alt="">
                                        <span class="zoom"><span class="icon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </span>
                                    </a>
                                </li>


                                <li class="grid-item format-image col-md-4 col-sm-6 col-xs-6">
                                    <a href="{{ asset('assets/images/img6.jpeg') }}"
                                        class="media-box popup-image">
                                        <img src="{{ asset('assets/images/img6.jpeg') }}" class="gallery-img" alt="">
                                        <span class="zoom"><span class="icon">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer-60"></div>
            <!-- end row -->
            <div class="np-links">
                <div class="row">
                </div>
            </div>

            <div class="footer-img">
                <img src="{{ asset('assets/images/flower1-300x300.jpg') }}" alt="">
            </div>

        </div>

    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-weight: bold; color: #000; font-size: 1rem;">
                    Confirm Your 🕊️ Message
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> <span id="modalName"></span></p>
                <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                <p><strong>Message:</strong></p>
                <p id="modalMessage" style="white-space: pre-wrap;"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-lg mt-3" style="color: white" data-dismiss="modal">Edit</button>
                <button type="button" class="btn btn-primary btn-lg mt-3" id="submitBtn" onclick="submitForm()">
                    <span id="submitText">Confirm & Submit</span>
                    <span id="submitSpinner" style="display: none;">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Sending...
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function showToast(type, message) {
        const toastContainer = document.getElementById('toastContainer');
        const toast = document.createElement('div');

        // Set toast classes and styles based on type
        toast.className = `toast show ${type === 'success' ? 'toast-success' : 'toast-error'}`;
        toast.style.cssText = `
        padding: 15px 35px 15px 15px;
        margin-bottom: 15px;
        border-radius: 8px;
        color: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        animation: slideIn 0.3s ease-out forwards;
        position: relative;
        overflow: hidden;
        max-width: 350px;
        min-height: 50px;
    `;

        // Set background based on type
        if (type === 'success') {
            toast.style.background = 'linear-gradient(135deg, #28a745 0%, #218838 100%)';
        } else {
            toast.style.background = 'linear-gradient(135deg, #dc3545 0%, #c82333 100%)';
        }

        // Create content wrapper for icon and message
        const contentWrapper = document.createElement('div');
        contentWrapper.style.cssText = `
        display: flex;
        align-items: center;
        gap: 10px;
        padding-right: 5px;
    `;

        // Add icon based on type
        const icon = document.createElement('i');
        icon.className = type === 'success' ? 'fa fa-check-circle' : 'fa fa-exclamation-circle';
        icon.style.cssText = `
        font-size: 18px;
        flex-shrink: 0;
        margin-top: 1px;
    `;

        // Add message
        const messageElement = document.createElement('div');
        messageElement.style.cssText = `
        flex: 1;
        line-height: 1.4;
        word-wrap: break-word;
    `;
        messageElement.innerHTML = message;

        // Add close button positioned at top-right
        const closeButton = document.createElement('button');
        closeButton.innerHTML = '&times;';
        closeButton.style.cssText = `
        position: absolute;
        top: 8px;
        right: 8px;
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background-color 0.2s ease;
        z-index: 10;
    `;

        // Add hover effect to close button
        closeButton.onmouseover = function() {
            this.style.backgroundColor = 'rgba(255,255,255,0.2)';
        };
        closeButton.onmouseout = function() {
            this.style.backgroundColor = 'transparent';
        };

        closeButton.onclick = function() {
            toast.style.animation = 'fadeOut 0.3s ease-out forwards';
            setTimeout(() => toast.remove(), 300);
        };

        // Add progress bar
        const progressBar = document.createElement('div');
        progressBar.className = 'toast-progress';
        progressBar.style.cssText = `
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        width: 100%;
        background: rgba(255,255,255,0.3);
        animation: progressBar 5s linear forwards;
    `;

        // Assemble toast
        contentWrapper.appendChild(icon);
        contentWrapper.appendChild(messageElement);
        toast.appendChild(contentWrapper);
        toast.appendChild(closeButton);
        toast.appendChild(progressBar);

        // Add to container
        toastContainer.appendChild(toast);

        // Auto-remove after 5 seconds
        setTimeout(() => {
            toast.style.animation = 'fadeOut 0.3s ease-out forwards';
            setTimeout(() => toast.remove(), 300);
        }, 5000);
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Summernote
        $('#summernote').summernote({
            placeholder: 'Enter your condolence message here...',
            tabsize: 2,
            height: 200,
        });

        // Function to set active tab
        function setActiveTab(tabId) {
            // Update URL without reloading
            const url = new URL(window.location.href);
            url.searchParams.set('tab', tabId);
            window.history.pushState({}, '', url);

            // Store in localStorage
            localStorage.setItem('activeTab', tabId);

            // Activate the tab
            $(`.nav-tabs a[href="#${tabId}"]`).tab('show');
        }

        // Handle tab clicks
        $('.nav-tabs a').on('click', function(e) {
            e.preventDefault();
            const tabId = $(this).attr('href').substring(1);
            setActiveTab(tabId);
        });

        // Determine initial active tab
        const urlParams = new URLSearchParams(window.location.search);
        const storedTab = localStorage.getItem('activeTab');

        // Priority: URL param > localStorage > default
        let initialTab = 'Obituary'; // Default tab
        if (urlParams.has('tab')) {
            initialTab = urlParams.get('tab');
        } else if (storedTab) {
            initialTab = storedTab;
        }

        // Special case for form submissions/errors
        @if(session('success') || session('error'))
        initialTab = 'condolences';
        @endif

        // Activate the tab
        $(`.nav-tabs a[href="#${initialTab}"]`).tab('show');
    });

    function showModal() {
        const name = document.querySelector('input[name="fullName"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const message = $('#summernote').summernote('code');

        // Remove HTML tags for empty content check
        const plainText = $('<div>').html(message).text().trim();

        if (!name || !plainText) {
            showToast('error', 'Please fill in all fields.');
            return;
        }

        document.getElementById('modalName').textContent = name;
        document.getElementById('modalEmail').textContent = email;
        document.getElementById('modalMessage').innerHTML = message;

        $('#confirmModal').modal('show');
    }

    function submitForm() {
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const submitSpinner = document.getElementById('submitSpinner');

        // Disable button & show spinner
        submitBtn.disabled = true;
        submitText.style.display = 'none'; // Hide text
        submitSpinner.style.display = 'inline-flex'; // Show spinner

        // Submit form after a brief delay (for visual feedback)
        setTimeout(() => {
            document.getElementById('condolenceForm').submit();
        }, 500);
    }



    function showContactModal() {
        const name = document.querySelector('input[name="contactName"]').value;
        const email = document.querySelector('input[name="contactEmail"]').value;
        const message = document.getElementById('contactUsMessage').value;

        if (!name || !email || !message) {
            showToast('error', 'Please fill in all fields.');
            return;
        }

        document.getElementById('modalName').textContent = name;
        document.getElementById('modalEmail').textContent = email;
        document.getElementById('modalMessage').innerHTML = message;

        $('#confirmModal').modal('show');
    }

    function submitForm() {
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const submitSpinner = document.getElementById('submitSpinner');

        // Disable button & show spinner
        submitBtn.disabled = true;
        submitText.style.display = 'none'; // Hide text
        submitSpinner.style.display = 'inline-flex'; // Show spinner

        // Submit form after a brief delay (for visual feedback)
        setTimeout(() => {
            document.getElementById('contact-form').submit();
        }, 500);
    }
</script>

<style>
    /* Toast animations */
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }

        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }

    @keyframes progressBar {
        from {
            width: 100%;
        }

        to {
            width: 0%;
        }
    }

    /* Enhanced toast container positioning */
    #toastContainer {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        width: auto;
        max-width: 90vw;
    }

    /* Responsive adjustments for mobile */
    @media (max-width: 768px) {
        #toastContainer {
            top: 10px;
            right: 10px;
            left: 10px;
            width: auto;
        }

        .toast {
            max-width: none !important;
        }
    }

    /* Submit button styles */
    #submitBtn {
        position: relative;
        min-width: 150px;
    }

    #submitSpinner {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    /* Modal styles */
    .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .modal-title {
        font-weight: 600;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-footer {
        border-top: 1px solid #dee2e6;
        padding: 15px 20px;
    }
</style>



<!-- funeral program  -->
<style>
    .memorial-header {
        margin-bottom: 30px;
    }



    .program-section {
        margin-bottom: 40px;
    }

    .schedule-day {
        margin-bottom: 30px;
        padding: 15px;
        background-color: rgba(249, 249, 249, 0.7);
        border-radius: 5px;
    }

    .schedule-day h3 {
        color: #8B0000;
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
        margin-bottom: 15px;
        font-family: var(--cabinet-font);
        font-weight: 500;
        font-size: 18px;
    }

    .schedule-day ul {
        list-style-type: none;
        padding-left: 0;
        margin-left: 0px !important;
    }

    .schedule-day li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: start;
        justify-content: start;

        /* flex-direction: column; */
        gap: 6px;
    }

    .schedule-day li .time {
        /* display: flex; */
        white-space: nowrap;
        color: #333;
        font-weight: 600;
        font-family: var(--cabinet-font);
        margin: 0;
        font-size: 14px;
    }

    .schedule-day li .info {
        font-size: 14px;
        font-weight: 500;
    }

    .prayer-close {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid #ddd;
    }

    .prayer-close em {
        font-size: 14px;
        color: #555;
        color: rgb(139, 0, 0);
        font-style: italic;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .program-sign {
        text-align: right;
        font-style: italic;
        font-family: Lora, serif;
        font-weight: 600;
        font-size: 15px;
    }


    @media only screen and (max-width: 767px) {
        .schedule-day li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            flex-direction: column;
            gap: 0px;
        }

        .schedule-day li .arrow {
            display: none !important;
        }
    }
</style>

@endsection