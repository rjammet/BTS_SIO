 public class Grade {   
 
    private char code;         
    private string libelle;         
    private double tauxHoraire;   
 
    /// <summary>         
    /// Constructeur         
    /// </summary>         
    /// <param name="unCode"></param>         
    /// <param name="unLibelle"></param>         
    /// <param name="unTaux"></param>     
    public Grade(char unCode, string unLibelle, double unTaux) {             
        this.code = unCode;             
        this.libelle = unLibelle;             
        this.tauxHoraire = unTaux; 
    } 
 
    /// <summary>         
    /// Méthode qui retourne les informations détaillées du grade sous la forme d'une chaîne         
    /// </summary>         
    public string Infos(){             
        string valRetour = "Grade " + this.code + " : " + this.libelle + " --> " + this.tauxHoraire +" euros/heure";
        return valRetour;         
    } 
 
    public double GetTauxHoraire() {             
        return this.tauxHoraire;         
    }     
}