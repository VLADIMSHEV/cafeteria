
public class Cafeteria {
    //	Программа помогает человеку выбрать желаемый ужин, напиток и десерт.
    public static void main(String[] args) {


//	Создаем три массива с товаром
        String[] wordListOne = {"спагетти", "суши", "салат Цезарь", "гречку"};

        String[] wordListTwo = {"Pepsi", "апельсиновый сок", "зеленый чай", "компот"};

        String[] wordListThree = {"торт наполеон","чизкейк","вишневый пирог","печенье"};


//	Вычисляем, сколько слов в каждом списке

        int oneLength = wordListOne.length;
        int twoLength = wordListOne.length;
        int threeLength = wordListOne.length;

//	Генерируем три сулчайных числа

        int rand1 = (int) (Math.random() * oneLength);
        int rand2 = (int) (Math.random() * twoLength);
        int rand3 = (int) (Math.random() * threeLength);

//		Create  phrase

//		String phrase = wordListOne[rand1] + " " + wordListTwo[rand2] + " " + wordListThree[rand3];
        String prime = wordListOne[rand1];
        String drink = wordListTwo[rand2];
        String disert = wordListThree[rand3];



//		Выводим фразу на экран
        System.out.println("Хочу заказать " + prime+ ", " + drink + " и "+ disert );



    }

}