using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ShipShooting : MonoBehaviour
{
    [SerializeField] protected bool isShooting = false;
    [SerializeField] protected float shootDelay = 0.2f;
    [SerializeField] protected float shootTimer = 0f;
    // [SerializeField] protected Transform bulletPrefab;

    void Update()
    {
        this.IsShooting();
        //this.Shooting(); game nay ban dung la` de o fixupdate
    }

    private void FixedUpdate()
    {
        this.Shooting();
    }

    protected virtual void Shooting()
    {
        if (!this.isShooting) return;// return la khong lam gi ca

        this.shootTimer += Time.fixedDeltaTime;
        if (this.shootTimer < this.shootDelay) return;
        this.shootTimer = 0f;
        
        Vector3 spawnPos = transform.position;
        Quaternion rotation = transform.parent.rotation;
        // Transform newBullet = Instantiate(this.bulletPrefab, spawnPos, rotation);
        Transform newBullet = BulletSpawner.Instance.Spawn(BulletSpawner.bulletOne, spawnPos, rotation);// van shooting duoc ma khong can dung bullet 1
        if (newBullet == null) return;
        
        newBullet.gameObject.SetActive(true);
        Debug.Log("Shooting");
    }

    protected virtual bool IsShooting()
    {
        this.isShooting = InputManager.Instance.OnFiring == 1;
        return this.isShooting;
    }
}
