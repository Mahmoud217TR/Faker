<?php

namespace Faker\Provider;

namespace Faker\Provider\ar_EG;

class Lorem extends \Faker\Provider\Lorem
{
    protected static $wordList = [
        "أعود", "إليك", "ولك", "علي", "عهد", "وميثاق", "فتفعل", "بي", "تريد", "والله",
        "أقول", "وكيل", "فاستوثق", "منه", "الجني", "وأطلقه", "فرجع", "بلده", "وقضى", "جميع",
        "تعلقاته", "وأوصل", "الحقوق", "أهلها", "وأعلم", "زوجته", "وأولاده", "بما", "جرى",
        "فبكوا", "وكذلك", "أهله", "ونساءه", "وأوصى", "وقعد", "عندهم", "تمام", "السنة", "توجه",
        "وأخذ", "كفنه", "إبطه", "وودع", "وجيرانه", "وجميع", "رغما", "عن", "أنفه", "وأقيم",
        "العياط", "والصراخ", "فمشى", "أن", "وصل", "البستان", "وكان", "اليوم", "أول", "الجديدة",
        "فبينما", "جالس", "يبكي", "يحصل", "بشيخ", "كبير", "أقبل", "ومعه", "غزالة", "مسلسلة",
        "فسلم", "هذا", "وحياه", "سبب", "جلوسك", "المكان", "وأنت", "منفرد", "وهو", "مأوى",
        "الجن", "فأخبره", "مع", "وبسبب", "قعوده", "منهم", "الشيخ", "الأول", "صاحب", "الغزالة",
        "وقبل", "يد", "يا", "وتاج", "ملوك", "إذا", "حكيت", "لك", "حكايتي", "هذه", "ورأيتها",
        "عجيبة", "أتهب", "لي", "ثلث", "دم", "قال", "نعم", "أنت", "الحكاية", "وهبت",
        "دمه", "الأول", "اتعلم", "هي", "بنت", "عمي", "ومن", "لحمي", "ودمي", "وكنت",
        "تزوجت", "بها", "وهي", "صغيرة", "السن", "وأقمت", "معها", "نحو", "ثلاثين", "سنة",
        "فلم", "أرزق", "منها", "بولد", "فأخذت", "سرية", "فرزقت", "ذكر", "كأنه", "البدر",
        "بدا", "بعينين", "مليحتين", "وحاجبين", "مزججين", "وأعضاء", "كاملة", "فكبر", "شيئا", "فشيئا",
        "صار", "ابن", "خمس", "عشرة", "فطرأت", "سفرة", "المدن", "فسافرت", "بمتجر", "عظيم",
        "وكانت", "تعلمت", "السحر", "والكهانة", "صغرها", "فسحرت", "الولد", "عجلا", "وسحرت", "الجارية",
        "أمه", "بقرة", "وسلمتها", "الراعي", "جئت", "أنا", "بعد", "مدة", "طويلة", "السفر",
        "فسألت", "وعن", "فقالت", "جاريتك", "ماتت", "وابنك", "هرب", "ولم", "أين", "راح",
        "فجلست", "وأنا", "حزين", "القلب", "باكي",  "العين", "جاء", "عيد", "الضحية", "فأرسلت",
        "يخصني", "ببقرة", "سمينة", "سريتي", "التي", "سحرتها", "تلك", "فشمرت", "ثيابي", "وأخذت",
        "السكين", "بيدي", "وتهيأت", "لذبحها", "فصاحت", "وبكت", "بكاء", "شديدا", "فقمت", "عنها",
        "وأمرت", "بذبحها", "وسلخها", "يجد", "فيها", "شحما", "ولا", "لحما", "غير", "جلد", "وعظم", "فندمت",
        "ذبحها", "حيث", "لا", "ينفعني", "الندم", "وأعطيتها", "للراعي", "وقلت", "ائتني", "بعجل", "سمين",
        "فأتاني", "بولدي", "المسحور", "رآني", "العجل", "قطع", "حبله", "وجاءني", "وتمرغ", "وولول",
        "وبكى", "فأخذتني", "الرأفة", "ودع", "هذا", "وأدرك", "شهرزاد", "الصباح", "فسكتت", "الكلام",
        "المباح", "لها", "أختها", "أطيب", "حديثك", "وألطفه", "وألذه", "وأعذبه", "فقالت", "وأين",
        "مما", "أحدثكم", "به", "القابلة", "إن", "عشت", "وأبقاني", "نفسه", "أقتلها", "أسمع", "بقية",
        "حديثها", "أنهم", "باتوا", "متعانقين", "فخرج", "محل", "حكمه", "وطلع", "الوزير", "بالكفن",
        "حكم", "وولي", "وعزل", "آخر", "النهار", "يخبر", "بشيء", "فتعجب", "غاية", "العجب", "انفض",
        "الديوان", "ودخل", "شهريار", "قصرهو", "الثانية", "قالت", "دنيازاد", "لأختها", "شهرزاد",
        "أختي", "أتممي", "لنا", "الذي", "حديث", "والجني", "حبا", "وكرامة", "أذن", "الملك", "احكي",
        "ذو", "الرأي", "الرشيد", "رأى", "حن", "قلبه", "إليه", "للراعي", "ابق", "بين", "البهائم",
        "والجني", "يتعجب", "حكاية", "العجيب", "الغزالة", "سيد", "الجان", "وابنة", "تنظر", "وترى",
    ];
}
