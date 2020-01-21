using System;
using ClassDepartement;

namespace AppliDept {

    class Program {

        public static Departement dep;

        static void Main(string[] args) {
            string num, name, region;
            double superficie, population;

            Console.Write("Entrer les informations relatives pour la création d'un département");
            Console.WriteLine("\n> Entrer le numéro de la région : ");
            num = Console.ReadLine();

            Console.WriteLine("\n> Entrer le nom du département : ");
            name = Console.ReadLine();

            Console.WriteLine("\n> Entrer la superficie de votre région : ");
            superficie = double.Parse(Console.ReadLine());

            Console.WriteLine("\n> Entrer la population de votre région : ");
            population = double.Parse(Console.ReadLine());

            Console.WriteLine("\n> Entrer le nom de votre région : ");
            region = Console.ReadLine();

            dep = new Departement(num, name, superficie, population, region);
            Console.Write("\nVotre région à bien été créée ! Infos : \n");

            dep.Afficher();
            Console.ReadLine();

        }

        public static void createDept(string num, string name, double superficie, double population, string region){
            dep = new Departement(num, name, superficie, population, region);
        }

        public static string densiteMax(Departement dept1, Departement dept2)
        {
            if (dept1.CalculerDensite() > dept2.CalculerDensite()) return dept1.GetNom();
            else return dept2.GetNom();
        }

    }
}
