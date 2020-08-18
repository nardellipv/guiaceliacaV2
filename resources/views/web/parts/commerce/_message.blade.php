<div class="tab-pane fade" id="tab1-4">
    <div class="book-table">
        <h4 class="title3" itemprop="headline"><span
                    class="sudo-bottom sudo-bg-red">Comuniquese</span>
            con el comercio</h4>
        <form method="post" action="{{ route('MessageClientToCommerce', $commerce) }}">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="input-field brd-rd2"><i
                                class="fa fa-user"></i> <input
                                type="text" placeholder="Nombre" name="name" id="name"
                                required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="input-field brd-rd2"><i
                                class="fa fa-envelope"></i>
                        <input type="email" placeholder="EMAIL" name="email"
                               id="email" required>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="textarea-field brd-rd2"><i
                                class="fa fa-pencil"></i>
                        <textarea placeholder="Mensaje" name="messageText"></textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <button class="brd-rd2 red-bg"
                            type="submit">Enviar Mensaje
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>