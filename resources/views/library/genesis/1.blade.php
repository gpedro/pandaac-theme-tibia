@extends('theme::app')

@title('Genesis')
@navigation('/library/genesis')
@bodyclass('library-genesis')

@section('head')
    <link href="http://fonts.googleapis.com/css?family=Martel" rel="stylesheet" type="text/css">
@stop

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-genesis.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <h1>The Awakening of the Gods</h1>

            <p class="first-letter">In the beginning there was only a big, gaping void. It was everywhere and nowhere.</p>

            <p class="first-letter">In this emptiness two powerful entities appeared who were eventually known as the elder gods: Fardos the Creator and Uman Zathroth who combined in himself two unequal halves. One of these halves was Uman the Wise, a benign god who was gifted with divine intellect, while Zathroth the Destroyer was the other, darker half. These were the two halves of one single enigmatical entity, and even though either of them was perfectly capable of acting on his own just as if he had been fully independent, independent they were not. They were bound together by an eternal bond that could not be broken, and their destiny was one.</p>

            <p class="first-letter">Nobody knows where the elder gods came from, or whether they had always existed and eventually awoke from the slumber of infinity. But somewhere along the way they decided to create a universe. Surely Fardos was the initiator, for he was driven by the need to create and give life. He was overflowing with creative power and impatient to release it, so he stepped into existence and began to unleash his powers. However, none of his attempts to create were successful. All of his creations were swallowed by the void before they were completed, and none survived.</p>

            <p class="first-letter">Uman Zathroth regarded Fardos's undertakings thoughtfully. Uman was sagacious and held awesome magical powers. Most importantly, however, he was driven by an insatiable hunger for knowledge and enlightenment. In his essence he resembled Fardos, but where Fardos worked openly and logically, Uman's domain was the realm of mystery. Still, he shared Fardos's interest in creation, whereas his dark half Zathroth was essentially corruptive. Zathroth was a vain god who was painfully aware that his own creative powers were poor. Because of this he looked at Fardos's work of creation with jealousy, and from the very beginning he was determined to prevent or at least corrupt it in any way he could. Fardos, who did not suspect this, asked him for assistance because he had accepted the fact that he could not achieve creation on his own, but of course Zathroth denied. Uman, however, agreed to help. And from that he and Fardos worked together on the great project that was creation.</p>

            <div class="text-center">
                <img src="{{ asset('/pandaac/theme-tibia/img/genesis1.jpg') }}" alt="Genesis">
            </div>

            <p class="first-letter">Unfortunately, their combined efforts were hardly more successful. Just like before, everything Fardos and Uman created was swallowed by the void as soon as it came into existence, and the two gods sadly saw their creation run through their fingers like water through a sieve. On the other hand, Zathroth, who had been watching their efforts with suspicion, rejoiced. He ridiculed their efforts. However, his glee changed into surprise and anger when he found that something strange happened, something which perhaps Uman and Fardos did not expect themselves. To this day, nobody knows precisely what it was that caused it. Perhaps the power that had been spent lured another entity out of the void, or it might be that it simply awoke another divine entity from its slumber. Some even claim that in some mysterious way the power that had been spent by Uman and Fardos actually created a new entity. Whatever the truth may be, a new goddess stepped out of the void like a new-born mermaid from her shell. The amazed elder gods watched her divine beauty in awed admiration, for everything in her was perfect harmony. They agreed to call her Tibiasula. Zathroth, however, stood by and fumed with silent hate. But cunning as he was, he hid his resentment well and feigned to share the joy of the other elder gods.</p>

            <p class="text-center">
                <big>Chapter II: <a href="{{ url('/library/genesis/2') }}">The Great Creation</a></big>
            </p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection
