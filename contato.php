<?php include 'components/header.php'; ?>

    <section class="interna contato blog">
    	<div class="container">
            <div class="titulo-geral">
                <h2>Contato</h2>
            </div><!-- titulo-geral -->
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <form>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="NOME" value="" />
                        <input type="text" name="assunto" id="assunto" class="form-control" placeholder="ASSUNTO" value="" />
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" name="email" id="email" class="form-control" placeholder="E-MAIL" value="" />
                            </div><!-- .md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="TELEFONE" value="" />
                            </div><!-- .md-6 -->
                        </div><!-- .row -->
                        <textarea name="mensagem" id="mensagem" class="form-control" placeholder="MENSAGEM"></textarea>
                        <button>enviar</button>
                    </form>
                </div><!-- md-8 -->
                <div class="col-md-4 col-sm-4">
                    <aside>
                        <div class="blog">
                            <div class="item">
                                <a href="">
                                    <img src="assets/images/slide.jpg" alt="">
                                    <div class="conteudo">
                                        <h4>Ffasd asdfasdfa asdfasd asdfasd fas dfasdf</h4>
                                    </div><!-- conteudo -->
                                </a>
                            </div><!-- item -->
                        </div><!-- blog -->
                        <div class="produtos">
                            <div class="item">
                                <a href="">
                                    <h2>Câmbios</h2>
                                    <img src="assets/images/produtos.jpg" alt="" class="img-responsive">
                                    <p>É simplesmente uma simulação de texto da indústria tipográfica.</p>
                                </a>
                            </div><!-- item -->
                        </div><!-- produtos -->
                    </aside>
                </div><!-- md-4 -->
            </div><!-- row -->
    	</div><!-- container -->
    </section><!-- interna -->


<?php include 'components/footer.php'; ?>