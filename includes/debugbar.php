<section class="fixed-bottom bg-light p-1">
    <div class="container">
        <aside id="debugbar" class="collapse pb-2">

            <ul class="nav  nav-pills" id="debugbar-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="session-tab" data-bs-toggle="tab" href="#session" role="tab"
                       aria-controls="session" aria-selected="true">$_SESSION</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="get-tab" data-bs-toggle="tab" href="#get" role="tab" aria-controls="get"
                       aria-selected="false">$_GET</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="post-tab" data-bs-toggle="tab" href="#post" role="tab" aria-controls="post"
                       aria-selected="false">$_POST</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="server-tab" data-bs-toggle="tab" href="#server" role="tab" aria-controls="server"
                       aria-selected="false">$_SERVER</a>
                </li>
            </ul>
            <div class="tab-content py-4" id="debugbar-content" style="max-height: 500px; overflow: auto">
                <div class="tab-pane fade show active" id="session" role="tabpanel" aria-labelledby="session-tab">
                    <?php var_dump($_SESSION); ?>
                </div>
                <div class="tab-pane fade" id="get" role="tabpanel" aria-labelledby="get-tab">
                    <?php var_dump($_GET); ?>
                </div>
                <div class="tab-pane fade" id="post" role="tabpanel" aria-labelledby="post-tab">
                    <?php var_dump($_POST); ?>
                </div>
                <div class="tab-pane fade" id="server" role="tabpanel" aria-labelledby="server-tab">
                    <?php var_dump($_SERVER); ?>
                </div>
            </div>
        </aside>

        <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="collapse"
                data-bs-target="#debugbar"
                aria-expanded="false"
                aria-controls="debugbar">
            Debug
        </button>
    </div>
</section>