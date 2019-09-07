@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="home">
                <div class="home__left">
                    <div class="home-image">
                        <div class="home-image__top">
                            <img src="https://cs10.pikabu.ru/post_img/big/2018/11/03/2/1541206297198512579.jpg" alt="">
                        </div>
                        <div class="home-image__bottom">
                            <button class="btn btn-primary">Загрузить</button>
                            <button class="btn btn-success">Обновить</button>
                            <div class="home-image__like">
                                <div class="like">
                                    120
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home__right">
                    <div class="home-posts">
                        <div class="home-posts__top">
                            <div class="home-posts__pag">
                                {{$posts->links()}}
                            </div>
                            <div class="home-posts__create">
                                <a href="#" class="btn btn-success js-new-post">Новая статья</a>
                            </div>
                        </div>
                        <div class="home-posts__new">
                            <div class="post-create">
                                <div class="form">
                                    <div class="form-group">
                                        <input type="text" placeholder="Название статьи" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="body" id="" cols="30" rows="10" placeholder="Содержимое" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success">Добавить статью</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="home-posts__list">
                            @for ($i = 0; $i < 3; $i++)
                                <li class="home-posts__item">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi aut beatae dolor exercitationem maxime omnis quidem sit. Aliquam aliquid aut blanditiis consequuntur, dolor dolore eum harum id illo incidunt ipsum labore magnam maiores molestias nesciunt nobis numquam provident quae quisquam repellendus sequi similique sunt, tempora voluptas voluptatem. Consequuntur dignissimos dolorum enim eos error et harum ipsum itaque maxime molestiae nam natus nihil nulla obcaecati odio perferendis, porro quaerat quas quasi, qui quos rem sed similique soluta tempore velit veniam voluptate. Amet architecto delectus dignissimos eveniet ipsa nam nemo quae quaerat saepe tempora? Blanditiis explicabo fuga inventore quo tenetur! Ad autem ex fugit nemo quos. Aliquid at deleniti id quia quidem! Accusamus adipisci alias aperiam architecto atque aut corporis delectus dignissimos ea eligendi esse exercitationem fugiat fugit id ipsam laboriosam libero maxime molestiae nam nihil non obcaecati odit officia officiis optio pariatur perspiciatis quo, quos sapiente soluta sunt tempora vel vitae! Alias eius eligendi enim eveniet explicabo, facere in ipsam magnam molestiae obcaecati omnis possimus qui quos sunt voluptates? Cum exercitationem expedita nihil sapiente, sint vitae! Dolore magnam nostrum quisquam! Autem, fugiat ipsam iusto libero maiores
                                                nemo neque porro, quis reiciendis rem repellat repellendus veniam voluptas voluptate voluptatem. Est, ipsum!</p>
                                            <div class="card-control">
                                                <div class="card-control__btn">
                                                    <button href="#" class="btn btn-secondary js-show-comments">Комментарии</button>
                                                </div>
                                                <div class="card-control__btn">
                                                    <button href="#" class="btn btn-primary js-show-message">Читать полностью</button>
                                                </div>
                                                <div class="card-control__comments">
                                                    <div class="comment">
                                                        120
                                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="card-control__like">
                                                    <div class="like">
                                                        120
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__comments card-comments">
                                                <div class="card-comments__top">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="card-comments-list">
                                                                <div class="card-comments-list__item">
                                                                    <div class="card-comment">
                                                                        <div class="card-comment__logo"></div>
                                                                        <div class="card-comment__content">
                                                                            <div class="card-comment__name">Denis Chertenko</div>
                                                                            <div class="card-comment__text">Lorem ipsum dolor sit amet.</div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-comments-list__item">
                                                                    <div class="card-comment">
                                                                        <div class="card-comment__logo"></div>
                                                                        <div class="card-comment__content">
                                                                            <div class="card-comment__name">Denis Chertenko</div>
                                                                            <div class="card-comment__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda doloremque est illum incidunt laudantium modi necessitatibus quo totam veritatis! Amet neque quae rem vitae. Natus recusandae sit unde! Distinctio.</div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-comments__bottom">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="new-message">
                                                                <div class="new-message__left">
                                                                    <input type="text" placeholder="Введите сообщение">
                                                                </div>
                                                                <div class="new-message__right">
                                                                    <button class="btn btn-success">Отправить</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>  
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
