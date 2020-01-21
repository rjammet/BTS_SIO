using System;
using System.Collections;

namespace BTS_ConsoleApps {
    class MaskedNumber
    {

        public static int tentative = 0;
        public static int maskedNumber;
        public static int tentativeNumber;
        public static Boolean randomGenerated = false;

        static void Main(string[] args)
        {
            generateRandom();
            sendMessage(" ");
            sendMessage("Un nombre est caché. il est compris entre 1 et 100");
            sendMessage("Vous avez 5 tentatives.");
            sendMessage(" ");

            while (tentativeNumber != maskedNumber && tentative < 5)
            {
                write("Tapez un nombre : ");
                tentativeNumber = int.Parse(Console.ReadLine());
                isGoodNumber(tentativeNumber);
                tentative++;
                if (tentative == 4) sendMessage("Il ne vous reste plus qu'une tentative !");
            }
            if (tentative == 5) sendMessage("\n Vous avez perdu ! \n Le bon résulat est : " + maskedNumber);
        }


        public static void generateRandom()
        {
            if (randomGenerated == false)
            {
                randomGenerated = true;
                int random = getRandomIn(1, 100);
                maskedNumber = random;
                sendMessage("Génération du nombre caché...");
            }
        }

        public static void write(string message)
        {
            Console.Write(message);
        }

        public static void sendMessage(string message)
        {
            Console.WriteLine(message);
        }

        public static int getRandomIn(int minNumber, int maxNumber)
        {
            Random random = new Random();
            int result = random.Next(minNumber, maxNumber);
            return result;
        }

        public static void isGoodNumber(int number)
        {
            if (number < maskedNumber) sendMessage("Trop bas !");
            if (number > maskedNumber) sendMessage("Trop haut");
            if (number == maskedNumber) {
                sendMessage("Vous avez gagné avec un nombre d'essai de " + tentative);
                randomGenerated = false;
                Console.ReadLine();
            }
        }
    }
}