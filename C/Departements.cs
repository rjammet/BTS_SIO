using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Departements
{
    public class Departements{

        private String num;
        private String name;
        private double superficie;
        private double population;
        private String region;

        /// <summary>
        /// Permet la création d'un département
        /// </summary>
        /// <param name="num"> Le numéro du département </param>
        /// <param name="name"> Le nom du département </param>
        /// <param name="superficie"> La superficie du département </param>
        /// <param name="population"> Le nombre d'habitants </param>
        /// <param name="region"> Le nom de la région </param>
        public Departements(String num, String name, double superficie, double population, String region){
            this.num = num;
            this.name = name;
            this.superficie = superficie;
            this.population = population;
            this.region = region;
        }

        /// <summary>
        /// Permet d'afficher les informations du département
        /// </summary>
        public void view(){
            Console.Write(num + "\t" + name + "\t" + superficie + "\t" + population + "\t" + region);
        }

        /// <summary>
        /// Calcule la densité du départment
        /// </summary>
        /// <returns> Retroune la densité calculé </returns>
        public double calculateDensite() {
            return (this.population * 1000 / this.superficie);
        }

        /// <summary>
        /// Permet de nommer le département
        /// </summary>
        /// <param name="name"> Nom du département </param>
        public void setName(String name) {
            this.name = name;
        }

        /// <summary>
        /// Permet de nommer la région
        /// </summary>
        /// <param name="region"> Nom de la région </param>
        public void setRegion(String region) {
            this.region = region;
        }

        /// <summary>
        /// Permet d'attribuer le nombre d'habitants
        /// </summary>
        /// <param name="population"> Nombre d'habitants </param>
        public void setPopulation(double population) {
            this.population = population;
        }

        /// <summary>
        /// Retourne le numéro du département
        /// </summary>
        /// <returns> Le numéro  </returns>
        public String getNum() {
            return this.num;
        }

        /// <summary>
        /// Retourne ne nom du département
        /// </summary>
        /// <returns> Le nom </returns>
        public String getName() {
            return this.name;
        }

        /// <summary>
        /// Retourne la supérficie du département
        /// </summary>
        /// <returns></returns>
        public double getSuperficie(){
            return this.superficie;
        }

        /// <summary>
        /// Retourne la population
        /// </summary>
        /// <returns> Le nombre d'habitant </returns>
        public double getPopulation() {
            return this.population;
        }

        /// <summary>
        /// Retourne la région du département
        /// </summary>
        /// <returns></returns>
        public String getRegion()
        {
            return this.region;
        }

        /// <summary>
        /// Comparaisons entre 2 objets
        /// </summary>
        /// <param name="obj"> Objet a vérifié </param>
        /// <returns> l'objet adéquoite </returns>
        public override bool Equals(object obj) => base.Equals(obj);

        /// <summary>
        /// Methode String de System (default)
        /// </summary>
        /// <returns> String values </returns>
        public override string ToString()
        {
            return base.ToString();
        }

        public override int GetHashCode()
        {
            var hashCode = 2005094940;
            hashCode = hashCode * -1521134295 + EqualityComparer<string>.Default.GetHashCode(num);
            hashCode = hashCode * -1521134295 + EqualityComparer<string>.Default.GetHashCode(name);
            hashCode = hashCode * -1521134295 + superficie.GetHashCode();
            hashCode = hashCode * -1521134295 + population.GetHashCode();
            hashCode = hashCode * -1521134295 + EqualityComparer<string>.Default.GetHashCode(region);
            return hashCode;
        }
    }
}
