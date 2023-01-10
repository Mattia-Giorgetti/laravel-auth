@extends('layouts.app')
@section('content')
    <section id="home_main">
        <div class="container py-5">
            <div class="scroll-wrap">
                <h2 id="maintitle">Welcome</h2>
                <h3 id="subtext">To</h3>
                <h4 id="logopic">My Portfolio</h4>
            </div>


            <p class="hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil a nam eaque voluptatem
                incidunt
                aut corrupti
                odio autem magnam, rerum consectetur necessitatibus quaerat hic quos enim illum ratione facilis officia
                asperiores dolor cum ipsa quidem? Ab dolorum impedit laborum itaque molestiae nihil id tenetur.
                Doloribus
                quis fuga aliquid reprehenderit illo, minus quo nostrum dolore adipisci corporis vitae voluptates
                quibusdam.
                Laudantium totam nisi tenetur, vitae necessitatibus minus quas incidunt blanditiis, reiciendis
                perspiciatis
                aliquid labore culpa facere fugiat atque magni unde eaque, quasi alias quisquam quia fugit itaque. Quas
                aut
                dolorem eum quaerat rem doloribus esse, necessitatibus adipisci ex perferendis exercitationem voluptate
                ad
                quam magnam nesciunt quos illo quasi quod dolor atque sunt! Eos iure atque velit architecto voluptas
                obcaecati temporibus nam facere, ipsam reiciendis quia animi reprehenderit enim quam asperiores
                exercitationem aliquid at illum quod eum. Explicabo exercitationem accusamus temporibus reprehenderit
                consectetur laboriosam, vitae aut! Doloremque optio ab maiores itaque quae libero numquam voluptate
                provident amet incidunt deleniti recusandae et excepturi id adipisci nemo reprehenderit praesentium
                dicta
                enim, fugiat vitae.
            </p>
            <p class="py-3 hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium adipisci
                possimus
                ratione
                non, culpa,
                ipsam nesciunt, dolor dolores quaerat at corporis libero eligendi quod voluptatibus alias qui quisquam
                maiores temporibus in vitae soluta eius! Amet alias est, porro similique assumenda nisi sapiente minus
                distinctio cupiditate repudiandae eligendi. Autem, at nulla. Eum, deserunt ipsum laboriosam laudantium
                iste
                itaque debitis natus delectus quia iusto dolorem, nesciunt, nisi quae possimus praesentium. Laboriosam,
                totam impedit ratione nesciunt repudiandae quis ea rem, doloremque voluptatum alias ut, dolorum quaerat.
                Necessitatibus delectus, praesentium natus similique a dolore recusandae non rerum quidem dolor quas
                doloremque incidunt voluptatem doloribus vel ducimus officia possimus mollitia velit nostrum facilis
                dolores.</p>
        </div>
        <a class="d-block text-center" href="{{ route('admin.projects.index') }}">View my Projects</a>
    </section>
@endsection
