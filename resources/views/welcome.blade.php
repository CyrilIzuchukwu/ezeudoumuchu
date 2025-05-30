@extends('layout.app')
@section('content')

<div class=" banner-area">
    <div class="overlay"></div>
    <!-- start page banner -->
    <div class="">
        <!-- start container -->
        <div class="container bannner-content">
            <h1>CHIEF (HON) SIR SYLVESTER ANYARUE CHUKWUMA EZEOKENWA, KSJI (EZEUDO UMUCHU; ICHIE EZENWATA) </h1>
            <p class="date"> July 17, 1940 - May 15, 2025 </p>
        </div>
        <!-- end container -->
    </div>
    <!-- end page banner -->
</div>

<!-- Toast Notification Container -->
<div id="toastContainer" style="position: fixed; top: 50px; right: 50px; z-index: 9999; width: auto;"></div>

<div class="main" role="main">
    <div id="content" class="content main-content">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <div class="col-md-5 sticky-col ">
                    <div class="heraldic-design">
                        <div class="portrait-frame">
                            <img src="{{ asset('assets/images/profile1.jpeg') }}" alt="Portrait of Ezeudo Umuchu">
                            <div class="crest-ornament">
                                Ezeudo Umuchu
                            </div>
                        </div>

                        <div class="heraldic-title">
                            <div class="scroll-decoration">
                                <h1>Chief Sir. Sylvester <span>Chukwudozie</span> Ezeokenwa</h1>
                            </div>
                            <!-- <div class="title-plaque">
                                <span>Ezeudo Umuchu (KSJI)</span>
                            </div> -->
                            <div class="lifespan" style="text-align: center;">
                                <span class="icon">⌛</span>
                                <span>12 June 1955 - 15 May 2025</span>
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
                        <li
                            class="{{ request()->has('tab') && request()->get('tab') == 'condolences' ? 'active' : '' }}">
                            <a href="#condolences" aria-controls="Condolences" role="tab"
                                data-toggle="tab">Condolences</a>
                        </li>
                        <li><a href="#photographs" aria-controls="Photographs" role="tab"
                                data-toggle="tab">Photographs</a></li>

                    </ul>
                    <div class="tab-content obituary-info-tabs-content">
                        <div role="tabpanel"
                            class="tab-pane {{ request()->has('tab') && request()->get('tab') == 'condolences' ? '' : 'active' }}"
                            id="Obituary">


                            <div class="post-content">
                                <div class="tribute-header">
                                    <h1>EZEUDO UMUCHU'S TIMELESS LEGACY OF WISDOM AND INFLUENCE</h1>
                                    <p class="author">By Dr. Tony Olisa Mbeki</p>
                                </div>

                                <div class="intro-quote">
                                    <blockquote>
                                        <p>"Great men are not born great, they grow great."</p>
                                        <footer>— Mario Puzo</footer>
                                    </blockquote>
                                </div>

                                <div class="tribute-body">
                                    <p>Chief Sir Sylvester Chukwudozie Ezeokenwa, KSJI (Ezeudo Umuchu), was one such
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

                        <div role="tabpanel"
                            class="tab-pane {{ request()->has('tab') && request()->get('tab') == 'condolences' ? 'active' : '' }}"
                            id="condolences">
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
                                                        class="meta-data">{{ $condolence->created_at->format('F d, Y \a\t h:i A') }}</span>
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
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <input name="fullName" type="text" placeholder="Your name"
                                                class="form-control input-lg" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input name="email" type="email" placeholder="Your email (Optional)"
                                                class="form-control input-lg">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg mt-3" onclick="showModal()">Save
                                        Condolence</button>
                                </form>

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
                    <!-- <div class="col-md-6 col-sm-6 col-xs-6 text-align-left">
                                            <div class="pn-link prev-post-link">
                                                <a href="#" class="pull-left">
                                                    <span>Previous</span>
                                                </a>
                                            </div>
                                        </div> -->
                    <!-- <div class="col-md-6 col-sm-6 col-xs-6 text-align-right">
                                            <div class="pn-link next-post-link">
                                                <a href="#" class="pull-right">
                                                    <span>Next</span>
                                                    Janet Jordan</a>
                                            </div>
                                        </div> -->
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
                    Confirm Your Tribute 🕊️ Message
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

        if (!name || !email || !plainText) {
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endsection