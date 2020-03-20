[TestMethod()]
public void calculerPrixVenteTest(){

    Produit p2 = new Produit(101, "Produit2", 5.00, 1.20, 10, 30);
    double actual = p2.calculerPrixVente();
    double expected = 6;
    Assert.AreEqual(expected, actual, "Le prix de vente doit être de 6euros !");
}

[TestMethod()]
public void etreDisponibleTest(){

    Produit p2 = new Produit(101, "Produit2", 5.00, 1.20, 10, 30);
    Assert.AreEqual(false, p2.etreDisponible(), "Le produit n'est pas disponible - stock de 0");
    Assert.IsFalse(p2.etreDisponible(), "Le produit n'est pas disponible - stock de 0");
    
    p2.setStock(500);
    Assert.AreEqual(true, p2.etreDisponible(), "Le produit est disponible - stock de 500");
    Assert.IsTrue(p2.etreDisponible(), "Le produit est disponible - stock de 500");
}

